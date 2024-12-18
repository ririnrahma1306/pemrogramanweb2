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
        return view('admin/data-trnsaksi');
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function data_buku(){
        return view('admin/data_buku');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }
}

