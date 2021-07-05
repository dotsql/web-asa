<?php

namespace App\Models;

use CodeIgniter\Model;

class Msiswa extends Model
{
   protected $column_order = array(null, 'nodaftar_siswa', 'nama_siswa', 'nama_kelas', 'nohp_siswa', 'email_siswa', 'alamat_siswa', null);
   protected $column_search = array('nodaftar_siswa', 'nama_siswa', 'nama_kelas', 'nohp_siswa', 'email_siswa', 'alamat_siswa', 'status_siswa');
   protected $order = array('nama_siswa' => 'asc');
   public function __construct()
   {
      parent::__construct();
      $db = \Config\Database::connect();
      $this->t_siswa = $db->table('siswa');
      $this->request = \Config\services::request();
      $this->uri = new \CodeIgniter\HTTP\URI(uri_string());
      $tahun = $db->query("SELECT * FROM tahun where aktif_tahun='1' limit 1 ")->getrowarray();
      $this->id_tahun = $tahun['id_tahun'];
   }
   public function cekemail($email)
   {
      return $this->t_siswa->where('email_siswa', $email)->get();
   }
   public function data()
   {
      return $this->t_siswa->join('tahun', 'tahun.id_tahun=siswa.id_tahun_siswa', 'left')->join('kelas', 'kelas.id_kelas=siswa.id_kelas_siswa', 'left')->orderby('nodaftar_siswa', 'asc')->where('id_tahun_siswa', $this->id_tahun)->orderby('nodaftar_siswa', 'asc')->get();
   }
   public function buatnodaftar()
   {
      $this->t_siswa->select('RIGHT(siswa.nodaftar_siswa,5) as nodaftar', FALSE);
      $this->t_siswa->orderby('nodaftar_siswa', 'DESC');
      $this->t_siswa->limit(1);
      $query = $this->t_siswa->get();
      if ($query->getrowcount() <> 0) {
         $data = $query->getrow();
         $nodaftar = intval($data->nodaftar) + 1;
      } else {
         $nodaftar = 1;
      }
      $nodaftarmax = str_pad($nodaftar, 5, "0", STR_PAD_LEFT);
      $nodaftarjadi = 'SIS' . $nodaftarmax;
      return $nodaftarjadi;
   }
   public function simpan($request, $id_tahun, $nodaftar, $pass, $token)
   {
      $d['id_tahun_siswa'] = $id_tahun;
      $d['id_kelas_siswa'] = $request->getpost('kelas');
      $d['nodaftar_siswa'] = $nodaftar;
      $d['token_siswa'] = $token;
      $d['nama_siswa'] = $request->getpost('nama_siswa');
      $d['email_siswa'] = $request->getpost('email_siswa');
      $d['nohp_siswa'] = $request->getpost('nohp_siswa');
      $d['asalsekolah_siswa'] = $request->getpost('asalsekolah_siswa');
      $d['alamat_siswa'] = $request->getpost('alamat_siswa');
      $d['username_siswa'] = $request->getpost('email_siswa');
      $d['password_siswa'] = md5($pass);
      $d['p_siswa'] = $pass;
      $d['status_siswa'] = 'PENDING';
      $d['tglinput_siswa'] = date('Y-m-d H:i:s');
      $this->t_siswa->insert($d);
   }
   public function terakhir()
   {
      return $this->t_siswa->orderby('id_siswa', 'desc')->limit(1)->get();
   }
   public function getone($id_siswa)
   {
      return $this->t_siswa->join('tahun', 'tahun.id_tahun=siswa.id_tahun_siswa', 'left')->join('kelas', 'kelas.id_kelas=siswa.id_kelas_siswa', 'left')->where('id_siswa', $id_siswa)->get();
   }
   public function authprofil($request, $id_siswa)
   {
      $d['id_kelas_siswa'] = $request->getpost('kelas');
      $d['nama_siswa'] = $request->getpost('nama_siswa');
      $d['nik_siswa'] = $request->getpost('nik_siswa');
      $d['nisn_siswa'] = $request->getpost('nisn_siswa');
      $d['templahir_siswa'] = $request->getpost('templahir_siswa');
      $d['tgllahir_siswa'] = ymd($request->getpost('tgllahir_siswa'));
      $d['asalsekolah_siswa'] = $request->getpost('asalsekolah_siswa');
      $d['alamatasal_siswa'] = $request->getpost('alamatasal_siswa');
      $d['jk_siswa'] = $request->getpost('jk_siswa');
      $d['alamat_siswa'] = $request->getpost('alamat_siswa');
      $d['email_siswa'] = $request->getpost('email_siswa');
      $d['nohp_siswa'] = $request->getpost('nohp_siswa');
      $d['nama_ayah_siswa'] = $request->getpost('nama_ayah_siswa');
      $d['nama_ibu_siswa'] = $request->getpost('nama_ibu_siswa');
      $d['username_siswa'] = $request->getpost('username_siswa');
      $d['password_siswa'] = md5($request->getpost('password_siswa'));
      $d['p_siswa'] = $request->getpost('password_siswa');
      $d['wa_siswa'] = $request->getpost('wa_siswa');
      $d['info_siswa'] = $request->getpost('info_siswa');
      $this->t_siswa->where('id_siswa', $id_siswa);
      $this->t_siswa->update($d);
   }
   public function ceklogin($request)
   {
      $this->t_siswa->where('username_siswa', $request->getpost('username'));
      $this->t_siswa->where('password_siswa', md5($request->getpost('password')));
      $this->t_siswa->where('id_tahun_siswa', $this->id_tahun);
      return $this->t_siswa->limit(1)->get();
   }
   public function hapus($id_siswa)
   {
      $this->t_siswa->where('id_siswa', $id_siswa);
      $this->t_siswa->delete();
   }
   public function konfirmasi($id_siswa)
   {
      $d['status_siswa'] = 'KONFIRMASI';
      $this->t_siswa->where('id_siswa', $id_siswa);
      $this->t_siswa->update($d);
   }
   public function batal($id_siswa)
   {
      $d['status_siswa'] = 'PENDING';
      $this->t_siswa->where('id_siswa', $id_siswa);
      $this->t_siswa->update($d);
   }
   public function getonetoken($token_siswa)
   {
      return $this->t_siswa->join('tahun', 'tahun.id_tahun=siswa.id_tahun_siswa', 'left')->join('kelas', 'kelas.id_kelas=siswa.id_kelas_siswa', 'left')->where('token_siswa', $token_siswa)->limit(1)->get();
   }
   public function carisiswa($q)
   {
      $db = \Config\Database::connect();
      return $db->query("SELECT * FROM siswa WHERE nama_siswa LIKE '%$q%' OR nodaftar_siswa LIKE '%$q%' limit 1 ");
   }
   public function exportjk($opsi)
   {
      $this->t_siswa->join('tahun', 'tahun.id_tahun=siswa.id_tahun_siswa', 'left');
      $this->t_siswa->join('kelas', 'kelas.id_kelas=siswa.id_kelas_siswa', 'left');
      $this->t_siswa->where('id_tahun_siswa', $this->id_tahun);
      $this->t_siswa->where('jk_siswa', $opsi);
      $this->t_siswa->orderby('nodaftar_siswa', 'asc');
      return $this->t_siswa->get();
   }
   public function exportkelas($opsi)
   {
      $this->t_siswa->join('tahun', 'tahun.id_tahun=siswa.id_tahun_siswa', 'left');
      $this->t_siswa->join('kelas', 'kelas.id_kelas=siswa.id_kelas_siswa', 'left');
      $this->t_siswa->where('id_tahun_siswa', $this->id_tahun);
      $this->t_siswa->where('id_kelas', $opsi);
      $this->t_siswa->orderby('nodaftar_siswa', 'asc');
      return $this->t_siswa->get();
   }
   public function exportstatus($opsi)
   {
      $this->t_siswa->join('tahun', 'tahun.id_tahun=siswa.id_tahun_siswa', 'left');
      $this->t_siswa->join('kelas', 'kelas.id_kelas=siswa.id_kelas_siswa', 'left');
      $this->t_siswa->where('id_tahun_siswa', $this->id_tahun);
      $this->t_siswa->where('status_siswa', $opsi);
      $this->t_siswa->orderby('nodaftar_siswa', 'asc');
      return $this->t_siswa->get();
   }
   //serverside
   private function _get_datatables_query()
   {
      $i = 0;
      //query
      $this->t_siswa->join('tahun', 'tahun.id_tahun=siswa.id_tahun_siswa', 'left');
      $this->t_siswa->join('kelas', 'kelas.id_kelas=siswa.id_kelas_siswa', 'left');
      $this->t_siswa->where('id_tahun_siswa', $this->id_tahun);
      foreach ($this->column_search as $item) {
         if ($this->request->getPost('search')['value']) {
            if ($i === 0) {
               $this->t_siswa->groupStart();
               $this->t_siswa->like($item, $this->request->getPost('search')['value']);
            } else {
               $this->t_siswa->orLike($item, $this->request->getPost('search')['value']);
            }
            if (count($this->column_search) - 1 == $i)
               $this->t_siswa->groupEnd();
         }
         $i++;
      }
      if ($this->request->getPost('order')) {
         $this->t_siswa->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
      } else if (isset($this->order)) {
         $order = $this->order;
         $this->t_siswa->orderBy(key($order), $order[key($order)]);
      }
   }
   function get_datatables()
   {
      $this->_get_datatables_query();
      if ($this->request->getPost('length') != -1)
         $this->t_siswa->limit($this->request->getPost('length'), $this->request->getPost('start'));
      $query = $this->t_siswa->get();
      return $query->getResult();
   }
   function count_filtered()
   {
      $this->_get_datatables_query();
      return $this->t_siswa->countAllResults();
   }
   public function count_all()
   {
      $this->_get_datatables_query();
      return $this->t_siswa->countAllResults();
   }
}
