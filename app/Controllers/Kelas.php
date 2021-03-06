<?php

namespace App\Controllers;

use App\Models\Mkelas;

class Kelas extends BaseController
{
    public function __construct()
    {
        $this->request = \Config\services::request();
        $this->uri = new \CodeIgniter\HTTP\URI(uri_string());
        $this->Mkelas = new Mkelas();
    }
    public function tambah()
    {
        $path = 'file/kelas';
        $width = ['400'];
        $height = ['300'];
        $image = \Config\Services::image();
        $file = $this->request->getFile('foto_kelas');
        if ($file->getName() != null) {
            $validated = $this->validate([
                'foto_kelas' => 'uploaded[foto_kelas]|max_size[foto_kelas,5000]|mime_in[foto_kelas,image/png,image/jpg,image/gif,image/jpeg]'
            ]);
            if ($validated) {
                $newName = $file->getRandomName();
                $file->move($path, $newName);
                $img = $path . '/' . $newName;
                for ($i = 0; $i < count($width); $i++) {
                    $image->withFile($img)->resize($width[$i], $height[$i])->save($path . '/' . $width[$i] . '_' . $newName);
                }
            } else {
                $img = '';
            }
        } else {
            $img = '';
        }
        $this->Mkelas->tambah($this->request, $img);
        session()->setflashdata('msg', 'simpan');
        return redirect()->to(base_url('paneladmin/kelas'));
    }
    public function edit()
    {
        $path = 'file/kelas';
        $width = ['400'];
        $height = ['300'];
        $image = \Config\Services::image();
        $file = $this->request->getFile('foto_kelas');
        if ($file->getName() != null) {
            $validated = $this->validate([
                'foto_kelas' => 'uploaded[foto_kelas]|max_size[foto_kelas,5000]|mime_in[foto_kelas,image/png,image/jpg,image/gif,image/jpeg]'
            ]);
            if ($validated) {
                $newName = $file->getRandomName();
                $file->move($path, $newName);
                $img = $path . '/' . $newName;
                for ($i = 0; $i < count($width); $i++) {
                    $image->withFile($img)->resize($width[$i], $height[$i])->save($path . '/' . $width[$i] . '_' . $newName);
                }
                $this->Mkelas->edit($this->request, $img);
                //hapus
                $filegam = str_replace($path . '/', "", $this->request->getpost('fotolama'));
                if (file_exists($path . '/' . $filegam)) {
                    unlink($path . '/' . $filegam);
                }
                for ($i = 0; $i < count($width); $i++) {
                    if (file_exists($path . '/' . $width[$i] . '_' . $filegam)) {
                        unlink($path . '/' . $width[$i] . '_' . $filegam);
                    }
                }
                session()->setflashdata('msg', 'edit');
                return redirect()->to(base_url('paneladmin/kelas'));
            } else {
                $img = '';
                $this->Mkelas->edit($this->request, $img);
                session()->setflashdata('msg', 'edit');
                return redirect()->to(base_url('paneladmin/kelas'));
            }
        } else {
            $img = '';
            $this->Mkelas->edit($this->request, $img);
            session()->setflashdata('msg', 'edit');
            return redirect()->to(base_url('paneladmin/kelas'));
        }
    }
    public function hapus()
    {
        $path = 'file/kelas';
        $width = ['400'];
        $height = ['300'];
        $gal = $this->Mkelas->getone($this->uri->getsegment(3))->getrow();
        //hapus
        $filegam = str_replace($path . '/', "", $gal->foto_kelas);
        if (file_exists($path . '/' . $filegam)) {
            unlink($path . '/' . $filegam);
        }
        for ($i = 0; $i < count($width); $i++) {
            if (file_exists($path . '/' . $width[$i] . '_' . $filegam)) {
                unlink($path . '/' . $width[$i] . '_' . $filegam);
            }
        }
        $this->Mkelas->hapus($this->uri->getsegment(3));
        session()->setflashdata('msg', 'hapus');
        echo 'oke';
    }
}
