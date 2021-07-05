<?php

namespace App\Models;

use CodeIgniter\Model;

class Mtahun extends Model
{
    public function __construct(){
        parent::__construct();
        $db= \Config\Database::connect();
        $this->t_tahun= $db->table('tahun');
        $this->uri= new \CodeIgniter\HTTP\URI(uri_string());
    }
    public function data(){
        return $this->t_tahun->orderby('nama_tahun','asc')->get();
    }
    public function tambah($request){
        $d['nama_tahun']= $request->getpost('nama_tahun');
        $d['ket_tahun']= $request->getpost('ket_tahun');
        $d['aktif_tahun']= $request->getpost('aktif_tahun');
        $d['ppdb_tahun']= $request->getpost('ppdb_tahun');
        $this->t_tahun->insert($d);
    }
    public function getone($id_tahun){
        return $this->t_tahun->where('id_tahun',$id_tahun)->get();
    }
    public function edit($request){
        $d['nama_tahun']= $request->getpost('nama_tahun');
        $d['ket_tahun']= $request->getpost('ket_tahun');
        $d['aktif_tahun']= $request->getpost('aktif_tahun');
        $d['ppdb_tahun']= $request->getpost('ppdb_tahun');
        $this->t_tahun->where('id_tahun',$request->getpost('id_tahun'))->update($d);
    }
    public function hapus($id_tahun){
        return $this->t_tahun->where('id_tahun',$id_tahun)->delete();
    }
    public function dataaktif(){
        return $this->t_tahun->where('aktif_tahun',1)->limit(1)->get();
    }
}
