<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Home extends BaseController
{
    public function index(): string

    {
        
        $user = auth()->user();
        
        // Contoh 1: Menambahkan user yang sedang login menjadi admin
       
        $user->addGroup($user->status);

        

        $mahasiswa = new MahasiswaModel();
        $mahasiswa = $mahasiswa->findAll();

        $data = [
            'produk' => $mahasiswa,
            'username' => $user->username,
            'user' => $user
        ];


        return view('index', $data);
    }

    public function tambah()
    {
        $mahasiswa = new MahasiswaModel();
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'fakultas' => $this->request->getPost('fakultas'),
            'prodi' => $this->request->getPost('prodi'),
            'angkatan' => $this->request->getPost('angkatan')
        ];


        $mahasiswa->insert($data);
        return redirect()->to(base_url());
    }

    public function hapus($id)
    {
        $mahasiswa = new MahasiswaModel();
        $mahasiswa->delete($id);
        return redirect()->to(base_url());
    }

    public function edit()
    {
        $id = $this->request->getPost('id');
        $data = [
            'id' => $id,
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'fakultas' => $this->request->getPost('fakultas'),
            'prodi' => $this->request->getPost('prodi'),
            'angkatan' => $this->request->getPost('angkatan')
        ];
        $mahasiswa = new MahasiswaModel();
        $mahasiswa->where('id', $id)->set($data)->update();

        return redirect()->to(base_url());
    }
}
