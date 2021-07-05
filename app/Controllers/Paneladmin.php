<?php

namespace App\Controllers;

use Template;
use App\Models\Maplikasi;
use App\Models\Mlogin;
use App\Models\Mkategori;
use App\Models\Mhalaman;
use App\Models\Martikel;
use App\Models\Mgaleri;
use App\Models\Mslider;
use App\Models\Mvideo;
use App\Models\Mmenu;
use App\Models\Mourservice;
use App\Models\Mkelas;
use App\Models\Macara;
use App\Models\Mtahun;
use App\Models\Msiswa;

class Paneladmin extends BaseController
{
   public function __construct()
   {
      $this->request = \Config\services::request();
      $this->uri = new \CodeIgniter\HTTP\URI(uri_string());
      $this->Maplikasi = new Maplikasi();
      $this->Mlogin = new Mlogin();
      $this->Mkategori = new Mkategori();
      $this->Mhalaman = new Mhalaman();
      $this->Martikel = new Martikel();
      $this->Mgaleri = new Mgaleri();
      $this->Mslider = new Mslider();
      $this->Mvideo = new Mvideo();
      $this->Mmenu = new Mmenu();
      $this->Mourservice = new Mourservice();
      $this->Mkelas = new Mkelas();
      $this->Macara = new Macara();
      $this->Mtahun = new Mtahun();
      $this->Msiswa = new Msiswa();
   }
   public function index()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Dashboard";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['artikel'] = $this->Martikel->data();
      $d['galeri'] = $this->Mgaleri->data();
      $d['video'] = $this->Mvideo->data();
      $d['pengunjung'] = $this->Maplikasi->totalpengunjung()->getrow();
      $d['kelas'] = $this->Mkelas->data();
      $d['siswa'] = $this->Msiswa->data();
      return Template::paneladmin('paneladmin/home', $d);
   }
   public function profil()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Profil";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/setting/profil', $d);
   }
   public function setting()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Pengaturan";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/setting/setting', $d);
   }
   //kategori
   public function kategori()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Kategori";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kategori'] = $this->Mkategori->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/kategori/data', $d);
   }
   public function tambahkategori()
   {
      echo view('paneladmin/kategori/tambah');
   }
   public function editkategori()
   {
      $d['kategori'] = $this->Mkategori->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/kategori/edit', $d);
   }
   //tahun
   public function tahun()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Tahun Ajaran";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['tahun'] = $this->Mtahun->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/tahun/data', $d);
   }
   public function tambahtahun()
   {
      echo view('paneladmin/tahun/tambah');
   }
   public function edittahun()
   {
      $d['tahun'] = $this->Mtahun->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/tahun/edit', $d);
   }
   //halaman
   public function halaman()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Halaman";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['halaman'] = $this->Mhalaman->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/halaman/data', $d);
   }
   public function tambahhalaman()
   {
      echo view('paneladmin/halaman/tambah');
   }
   public function edithalaman()
   {
      $d['halaman'] = $this->Mhalaman->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/halaman/edit', $d);
   }
   //artikel
   public function artikel()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Artikel";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['artikel'] = $this->Martikel->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/artikel/data', $d);
   }
   public function tambahartikel()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Tambah Artikel";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kategori'] = $this->Mkategori->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/artikel/tambah', $d);
   }
   public function editartikel()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Edit Artikel";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kategori'] = $this->Mkategori->data();
      $d['artikel'] = $this->Martikel->getone($this->uri->getsegment(3))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/artikel/edit', $d);
   }
   //acara
   public function acara()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Acara";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['acara'] = $this->Macara->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/acara/data', $d);
   }
   public function tambahacara()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Tambah Acara";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/acara/tambah', $d);
   }
   public function editacara()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Edit Acara";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['acara'] = $this->Macara->getone($this->uri->getsegment(3))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/acara/edit', $d);
   }
   //galeri
   public function galeri()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Galeri";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['galeri'] = $this->Mgaleri->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/galeri/data', $d);
   }
   public function tambahgaleri()
   {
      echo view('paneladmin/galeri/tambah');
   }
   public function editgaleri()
   {
      $d['galeri'] = $this->Mgaleri->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/galeri/edit', $d);
   }
   //slider
   public function slider()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Slider";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['slider'] = $this->Mslider->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/slider/data', $d);
   }
   public function tambahslider()
   {
      echo view('paneladmin/slider/tambah');
   }
   public function editslider()
   {
      $d['slider'] = $this->Mslider->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/slider/edit', $d);
   }
   //video
   public function video()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Video";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['video'] = $this->Mvideo->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/video/data', $d);
   }
   public function tambahvideo()
   {
      echo view('paneladmin/video/tambah');
   }
   public function editvideo()
   {
      $d['video'] = $this->Mvideo->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/video/edit', $d);
   }
   //menu
   public function menu()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = 'Menu Website';
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['menu'] = $this->Mmenu->dataparent();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/menu/data', $d);
   }
   public function tambahmenu()
   {
      echo view('paneladmin/menu/tambah');
   }
   public function editmenu()
   {
      $d['menu'] = $this->Mmenu->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/menu/edit', $d);
   }
   public function submenu()
   {
      $d['submenu'] = $this->Mmenu->submenu($this->uri->getsegment(3));
      $d['menu'] = $this->Mmenu->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/menu/sub', $d);
   }
   //ourservice
   public function ourservice()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Ourservice";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['ourservice'] = $this->Mourservice->data();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/ourservice/data', $d);
   }
   public function tambahourservice()
   {
      echo view('paneladmin/ourservice/tambah');
   }
   public function editourservice()
   {
      $d['ourservice'] = $this->Mourservice->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/ourservice/edit', $d);
   }
   //kelas
   public function kelas()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Kelas";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/kelas/data', $d);
   }
   public function tambahkelas()
   {
      echo view('paneladmin/kelas/tambah');
   }
   public function editkelas()
   {
      $d['kelas'] = $this->Mkelas->getone($this->uri->getsegment(3))->getrow();
      echo view('paneladmin/kelas/edit', $d);
   }
   //siswa
   public function siswa()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Data Siswa";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/siswa/data', $d);
   }
   public function updatesiswa()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Update Data Siswa";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['siswa'] = $this->Msiswa->getone($this->uri->getsegment(3));
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/siswa/update', $d);
   }
   public function loadsiswa()
   {
      $d['kelas'] = $this->Mkelas->data();
      $d['siswa'] = $this->Msiswa->getone($this->request->getpostget('siswa'));
      echo view('paneladmin/siswa/load', $d);
   }
   public function carisiswa()
   {
      if (session()->get('id_pengguna') == null) {
         return redirect()->to(base_url());
      }
      $d['aplikasi'] = $this->Maplikasi->data();
      $d['title'] = "Data Siswa";
      $d['profile'] = $this->Mlogin->getoneadmin(session()->get('id_pengguna'))->getrow();
      $d['kelas'] = $this->Mkelas->data();
      return Template::paneladmin('paneladmin/siswa/cari', $d);
   }
   public function exportsiswa()
   {
      $d['tahun'] = $this->Mtahun->dataaktif()->getrowarray();
      $d['siswa'] = $this->Msiswa->data();
      echo view('paneladmin/siswa/export', $d);
   }
}
