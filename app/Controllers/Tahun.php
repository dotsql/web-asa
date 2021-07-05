<?php

namespace App\Controllers;
use App\Models\Mtahun;
class Tahun extends BaseController
{
    public function __construct(){
        $this->request= \Config\services::request();
        $this->uri= new \CodeIgniter\HTTP\URI(uri_string());
        $this->Mtahun= new Mtahun();
    }
    public function tambah(){
        $this->Mtahun->tambah($this->request);
        session()->setflashdata('msg','simpan');
        return redirect()->to(base_url('paneladmin/tahun'));
    }
    public function edit(){
        $this->Mtahun->edit($this->request);
        session()->setflashdata('msg','edit');
        return redirect()->to(base_url('paneladmin/tahun'));
    }
    public function hapus(){
        $this->Mtahun->hapus($this->uri->getsegment(3));
        session()->setflashdata('msg','hapus');
        echo 'oke';
    }
}
