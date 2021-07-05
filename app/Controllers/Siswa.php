<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\Mtahun;
use App\Models\Mkelas;

class Siswa extends BaseController
{
   public function __construct()
   {
      $this->uri = new \CodeIgniter\HTTP\URI(uri_string());
      $this->request = \Config\services::request();
      $this->Msiswa = new Msiswa();
      $this->Mtahun = new Mtahun();
      $this->Mkelas = new Mkelas();
   }
   public function hapus()
   {
      $this->Msiswa->hapus($this->uri->getsegment(3));
      session()->setflashdata('msg', 'hapus');

      echo "oke";
      //redirect(base_url('paneladmin/siswa'));
   }
   public function listdata()
   {
      $lists = $this->Msiswa->get_datatables();
      $data = [];
      $no = $this->request->getPost("start");
      foreach ($lists as $list) {
         if ($list->status_siswa == 'KONFIRMASI') {
            $ce = '<i class="fas fa-check-circle"></i>';
         } else {
            $ce = '';
         }
         $no++;
         $row = [];
         $row[] = $no . '<span class="float-right text-success">' . $ce . '</span>';
         $row[] = $list->nodaftar_siswa;
         $row[] = $list->nama_siswa;
         $row[] = $list->nama_kelas;
         $row[] = $list->nohp_siswa;
         $row[] = $list->email_siswa;
         $row[] = $list->alamat_siswa;
         $row[] = '
				<a href="' . base_url('paneladmin/updatesiswa/' . $list->id_siswa . '/access') . '" class="btn btn-info btn-xs"><i class="fas fa-redo"></i> Kelola</a>
				<a href="javascript:void(0)" onclick="hapus(' . $list->id_siswa . ')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
			';
         $data[] = $row;
      }
      $output = [
         "draw" => $this->request->getPost('draw'),
         "recordsTotal" => $this->Msiswa->count_all(),
         "recordsFiltered" => $this->Msiswa->count_filtered(),
         "data" => $data
      ];
      echo json_encode($output);
   }
   public function updatesiswa()
   {
      $this->Msiswa->authprofil($this->request, $this->request->getPost('siswa'));
      echo 'oke';
   }
   public function carisiswa()
   {
      $cek = $this->Msiswa->carisiswa($this->request->getPost('q'));
      if ($cek->getrowcount() > 0) {
         $data = $cek->getrowarray();
         $arr[] = array(
            "status" => "oke",
            "id_siswa" => $data['id_siswa']
         );
         echo json_encode($arr);
      } else {
         $arr[] = array(
            "status" => "oke",
            "id_siswa" => null
         );
         echo json_encode($arr);
      }
   }
   public function exportjk()
   {
      $opsi = $this->request->getpost('opsi');
      $d['tahun'] = $this->Mtahun->dataaktif()->getrowarray();
      $d['siswa'] = $this->Msiswa->exportjk($opsi);
      $konten = view('paneladmin/siswa/exportjk', $d);
      echo $konten;
   }
   public function exportstatus()
   {
      $opsi = $this->request->getpost('opsi');
      $d['tahun'] = $this->Mtahun->dataaktif()->getrowarray();
      $d['siswa'] = $this->Msiswa->exportstatus($opsi);
      $konten = view('paneladmin/siswa/exportstatus', $d);
      echo $konten;
   }
   public function exportkelas()
   {
      $opsi = $this->request->getpost('opsi');
      $d['tahun'] = $this->Mtahun->dataaktif()->getrowarray();
      $d['kelas'] = $this->Mkelas->getone($opsi)->getrowarray();
      $d['siswa'] = $this->Msiswa->exportkelas($opsi);
      $konten = view('paneladmin/siswa/exportkelas', $d);
      echo $konten;
   }
}
