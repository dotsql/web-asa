<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkelas extends Model
{
    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->t_kelas = $db->table('kelas');
        $this->uri = new \CodeIgniter\HTTP\URI(uri_string());
    }
    public function data()
    {
        return $this->t_kelas->orderby('id_kelas', 'asc')->get();
    }
    public function tambah($request, $img)
    {
        $d['wali_kelas'] = $request->getpost('wali_kelas');
        $d['nama_kelas'] = $request->getpost('nama_kelas');
        if ($img != null) {
            $d['foto_kelas'] = $img;
        } else {
            $d['foto_kelas'] = 'file/kelas/noimage.png';
        }
        $d['link_kelas'] = $request->getpost('link_kelas');
        $d['siswa_kelas'] = $request->getpost('siswa_kelas');
        $this->t_kelas->insert($d);
    }
    public function getone($id_kelas)
    {
        return $this->t_kelas->where('id_kelas', $id_kelas)->get();
    }
    public function edit($request, $img)
    {
        $d['wali_kelas'] = $request->getpost('wali_kelas');
        $d['nama_kelas'] = $request->getpost('nama_kelas');
        if ($img != null) {
            $d['foto_kelas'] = $img;
        }
        $d['link_kelas'] = $request->getpost('link_kelas');
        $d['siswa_kelas'] = $request->getpost('siswa_kelas');
        $this->t_kelas->where('id_kelas', $request->getpost('id_kelas'))->update($d);
    }
    public function hapus($id_kelas)
    {
        return $this->t_kelas->where('id_kelas', $id_kelas)->delete();
    }
}
