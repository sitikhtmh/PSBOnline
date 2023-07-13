<?php

namespace App\Http\Controllers;
use App\Userr;
use App\DataSiswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = Userr::all();
        return view('admin.daftarakun', ['admin' => $user]);

    }

    public function indexinformasi()
    {
        $admin = DataSiswa::all();
        return view('admin.informasi', ['admin' => $admin]);

    }
    
}
