<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Template;
use TCPDF;
use App\Models\Maplikasi;
use App\Models\Mmenu;
use App\Models\Mkelas;
use App\Models\Mtahun;
use App\Models\Msiswa;

class Ppdb extends BaseController
{
   public function __construct()
   {
      $this->request = \Config\services::request();
      $this->uri = new \CodeIgniter\HTTP\URI(uri_string());
      $this->Maplikasi = new Maplikasi();
      $this->Mmenu = new Mmenu();
      $this->Mkelas = new Mkelas();
      $this->Mtahun = new Mtahun();
      $this->Msiswa = new Msiswa();

      $this->Maplikasi->pengunjung();
   }
   public function login()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      if (session()->get('siswa') != null) {
         return redirect()->to(base_url('ppdb/profil'));
      }
      // utama
      $d['classhead'] = 'green';
      $d['aplikasi'] = $this->Maplikasi->data();
      $app = $d['aplikasi']->getrow();
      $d['title'] = "Login Siswa";
      $d['ogtitle'] = "Login Siswa";
      $d['ogdescription'] = $app->deskripsi_app;
      $d['ogimage'] = base_url($app->logo_app);
      $d['menu'] = $this->Mmenu->dataparent();
      $d['kelas'] = $this->Mkelas->data();
      $d['aktif'] = $this->Mtahun->dataaktif()->getrowarray();

      return Template::website('website/ppdb/login', $d);
   }
   public function authlogin()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      if (session()->get('siswa') != null) {
         return redirect()->to(base_url('ppdb/profil'));
      }
      $cek = $this->Msiswa->ceklogin($this->request);
      if ($cek->getrowcount() > 0) {
         $data = $cek->getrow();
         session()->set('siswa', $data->id_siswa);
         return redirect()->to(base_url('ppdb/profil'));
      } else {
         session()->setflashdata('msg', 'gagal');
         return redirect()->to(base_url('ppdb/login'));
      }
   }
   public function daftar()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      if (session()->get('siswa') != null) {
         return redirect()->to(base_url('ppdb/profil'));
      }
      // utama
      $d['classhead'] = 'green';
      $d['aplikasi'] = $this->Maplikasi->data();
      $app = $d['aplikasi']->getrow();
      $d['title'] = "Daftar Siswa";
      $d['ogtitle'] = "Daftar Siswa";
      $d['ogdescription'] = $app->deskripsi_app;
      $d['ogimage'] = base_url($app->logo_app);
      $d['menu'] = $this->Mmenu->dataparent();
      $d['kelas'] = $this->Mkelas->data();
      $d['aktif'] = $this->Mtahun->dataaktif()->getrowarray();

      return Template::website('website/ppdb/daftar', $d);
   }
   public function authdaftar()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      $cekemail = $this->Msiswa->cekemail($this->request->getpost('email_siswa'));
      if ($cekemail->getrowcount() > 0) {
         echo 'email';
         return false;
      }
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      $konten = '';
      $app = $this->Maplikasi->data()->getrow();
      $kelas =  $this->Mkelas->getone($this->request->getpost('kelas'))->getrow();
      $nama = $this->request->getpost('nama_siswa');
      $kepada = $this->request->getpost('email_siswa');
      $nohp = $this->request->getpost('nohp_siswa');
      $asal = $this->request->getpost('asalsekolah_siswa');
      $alamat = $this->request->getpost('alamat_siswa');
      $subject = 'Berhasil Mendaftarkan Diri';
      $nodaftar = $this->Msiswa->buatnodaftar();
      $pass = random(6);
      $token = randomkar(30);
      $mail = new PHPMailer(true);
      try {
         $mail->isSMTP();
         $mail->Host     = $app->smtphost_app;
         $mail->SMTPAuth = true;
         $mail->Username = $app->smtpuser_app;
         $mail->Password = $app->smtppass_app;
         $mail->SMTPSecure = 'ssl';
         $mail->Port     = $app->smtpport_app;
         $mail->setFrom($app->alamatemail_app, $app->atasnamaemail_app);
         $mail->addReplyTo($app->alamatemail_app, $app->atasnamaemail_app);
         $mail->addAddress($kepada, $nama);
         $mail->Subject = $subject;
         $mail->isHTML(true);
         // konten
         $konten .= '
         <h4>PENDAFTARAN SISWA BARU BERHASIL</h4>
         <p>
            <strong>kelas : </strong> ' . $kelas->nama_kelas . '<br>
            <strong>NOMOR : </strong> ' . $nodaftar . '<br>
            <strong>NAMA : </strong> ' . $nama . '<br>
            <strong>NOHP : </strong> ' . $nohp . '<br>
            <strong>ALAMAT : </strong> ' . $alamat . '<br>
            <strong>USERNAME : </strong> ' . $kepada . '<br>
            <strong>PASSWORD : </strong> ' . $pass . '<br>
            Silahkan Login <a href="' . base_url('ppdb/authtoken/' . $token) . '">Disini</a>
         </p>
         <p><b>Hubungi : ' . $app->nohp_app . '</b><br>Dari ' . $app->nama_app . '</p>
         ';
         // 
         $mailContent = $konten;
         $mail->Body = $mailContent;
         // Send email
         $mail->send();
         $this->Msiswa->simpan($this->request, $aktif['id_tahun'], $nodaftar, $pass, $token);
         $siswa = $this->Msiswa->terakhir()->getrowarray();
         session()->set('siswa', $siswa['id_siswa']);
         session()->setflashdata('msg', 'simpan');
         echo 'oke';
      } catch (Exception $e) {
         echo 'gagal';
      }
   }
   public function profil()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      if (session()->get('siswa') == null) {
         return redirect()->to(base_url('ppdb/login'));
      }
      // utama
      $d['classhead'] = 'green';
      $d['aplikasi'] = $this->Maplikasi->data();
      $app = $d['aplikasi']->getrow();
      $d['title'] = "Profil Siswa";
      $d['ogtitle'] = "Profil Siswa";
      $d['ogdescription'] = $app->deskripsi_app;
      $d['ogimage'] = base_url($app->logo_app);
      $d['menu'] = $this->Mmenu->dataparent();
      $d['kelas'] = $this->Mkelas->data();
      $d['aktif'] = $this->Mtahun->dataaktif()->getrowarray();

      $d['siswa'] = $this->Msiswa->getone(session()->get('siswa'))->getrowarray();
      return Template::website('website/ppdb/profil', $d);
   }
   public function update()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      $this->Msiswa->authprofil($this->request, session()->get('siswa'));
      session()->setflashdata('msg', 'edit');
      return redirect()->to(base_url('ppdb/profil'));
   }
   public function logout()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      session()->remove('siswa');
      return redirect()->to(base_url('ppdb/login'));
   }
   public function konfirmasi()
   {
      $siswa = $this->Msiswa->getone($this->request->getpostget('siswa'))->getrowarray();
      $konten = '';
      $app = $this->Maplikasi->data()->getrow();
      $nama = $siswa['nama_siswa'];
      $kepada = $siswa['email_siswa'];
      $subject = 'Selamat Anda Dikonfirmasi';
      $mail = new PHPMailer(true);
      try {
         $mail->isSMTP();
         $mail->Host     = $app->smtphost_app;
         $mail->SMTPAuth = true;
         $mail->Username = $app->smtpuser_app;
         $mail->Password = $app->smtppass_app;
         $mail->SMTPSecure = 'ssl';
         $mail->Port     = $app->smtpport_app;
         $mail->setFrom($app->alamatemail_app, $app->atasnamaemail_app);
         $mail->addReplyTo($app->alamatemail_app, $app->atasnamaemail_app);
         $mail->addAddress($kepada, $nama);
         $mail->Subject = $subject;
         $mail->isHTML(true);
         // konten
         $konten .= '
         <h4>SELAMAT ANDA SUDAH DIKONFIRMASI MENJADI SISWA BARU</h4>
         <p>
            <strong>kelas : </strong> ' . $siswa['nama_kelas'] . '<br>
            <strong>NOMOR : </strong> ' . $siswa['nodaftar_siswa'] . '<br>
            <strong>NAMA : </strong> ' . $siswa['nama_siswa'] . '<br>
            <strong>TANGGAL : </strong> ' . date('d-m-Y H:i:s') . '<br>
            Cek detailnya <a href="' . base_url('ppdb/authtoken/' . $siswa['token_siswa']) . '">Disini</a>
         </p>
         <p><b>Hubungi : ' . $app->nohp_app . '</b><br>Dari ' . $app->nama_app . '</p>
         ';
         // 
         $mailContent = $konten;
         $mail->Body = $mailContent;
         // Send email
         $mail->send();
         $this->Msiswa->konfirmasi($this->request->getPostget('siswa'));
         echo 'oke';
      } catch (Exception $e) {
         echo 'gagal';
      }
   }
   public function batal()
   {
      $this->Msiswa->batal($this->request->getPostget('siswa'));
      echo 'oke';
   }
   public function cetakformulir()
   {
      $d['app'] = $this->Maplikasi->data()->getrow();
      $d['siswa'] = $this->Msiswa->getonetoken($this->uri->getsegment(3))->getrowarray();
      $html = view('paneladmin/siswa/cetakformulir', $d);
      $pdf = new TCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
      $pdf->SetCreator('Cahyadi Wibisono');
      $pdf->SetAuthor('Cahyadi Wibisono');
      $pdf->SetTitle('Formulir');
      $pdf->SetSubject('Formulir');
      $pdf->setPrintHeader(false);
      $pdf->setPrintFooter(false);
      $pdf->addPage();
      $pdf->writeHTML($html, true, false, true, false, '');
      $this->response->setContentType('application/pdf');
      $pdf->Output('Form-' . $d['siswa']['nama_siswa'] . '_' . time() . '.pdf', 'I');
   }
   public function authtoken()
   {
      $aktif = $this->Mtahun->dataaktif()->getrowarray();
      if ($aktif['ppdb_tahun'] != 1) {
         return redirect()->to(base_url());
      }
      if (session()->get('siswa') != null) {
         return redirect()->to(base_url('ppdb/profil'));
      }
      $siswa = $this->Msiswa->getonetoken($this->uri->getsegment(3));
      if ($siswa->getrowcount() > 0) {
         $data = $siswa->getrow();
         session()->set('siswa', $data->id_siswa);
         return redirect()->to(base_url('ppdb/profil'));
      } else {
         session()->setflashdata('msg', 'gagal');
         return redirect()->to(base_url('ppdb/login'));
      }
   }
}
