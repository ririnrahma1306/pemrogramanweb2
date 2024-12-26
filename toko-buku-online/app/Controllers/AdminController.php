<?php

namespace App\Controllers;

use App\Controllers\BaseControllers;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
    }

    public function transksi()
    {
        return view('admin/data-transaksi');
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function data_buku(){
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll();
        return view('admin/data-buku', $data);
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }

    public function create_buku(){
        $bookModel = model('BookModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('thumbnail_url');

        if(!$file->hasMoved()){
            $path = $file->store('images'); //writable/uploads/images/nama-image
            $data['thumbnail_url'] = $path;
        }

        if($bookModel->insert($data, false)){
            return redirect()->to('admin/data-buku')->with('sukses', 'Data berhasil disimpan!');
        }else {
            return redirect()->back()->with('gagal', 'Data gagal disimpan!');
        }
    }

    public function edit_buku($id){
        $bookModel = model('BookModel');
        $data['buku'] = $bookModel->find($id);

        return view('admin/edit-data-buku', $data);
    }

    public function update_buku($id){
        $bookModel = model('BookModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('thumbnail_url');

        if(!$file->isValid()){
        if(!$file->hasMoved()){
            $path = $file->store('images'); //writable/uploads/images/nama-image
            $data['thumbnail_url'] = $path;
        }
    }

        if($bookModel->update($id, $data)){
            return redirect()->to('admin/data-buku')->with('sukses', 'Data berhasil diupdate!');
        }else {
            return redirect()->back()->with('gagal', 'Data gagal diupdate!');
        }
    }
        public function delete_buku($id){
            $bookModel = model('BookModel');
            if($bookModel->delete($id)){
                return redirect()->to('admin/data-buku')->with('sukses', 'Data berhasil dihapus!');
            }else {
                return redirect()->back()->with('gagal', 'Data gagal dihapus!');
            }  
        }
    }

