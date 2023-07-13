<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\DataSiswa;
use DB;
use Barryvdh\DomPDF\Facade as PDF; 

class DashboardController extends Controller
{
    public function index()
    {
        $user = DataSiswa::all();
        return view('user.dashboard', ['user' => $user]);

    }

    public function show(DataSiswa $user)
    {
        
        return view('user.detail', ['user'=>$user]);
        
    }

    public function print_all()
    {
        $user = DataSiswa::all();   
        $pdf = PDF::loadview('user.print',['user' =>  $user]); 
       return $pdf->stream(); 
    }

    public function create()
    {
        return view('user.pendaftaran');
    }

    public function store(Request $request)
    {
        // DataSiswa::create($request->all()); 

        $data=[
            'nama_siswa' => $request->nama,
            'tempat_lahir' => $request->tempat,
            'tgl_lahir' => $request->tanggal,
            'jenis_kelamin' => $request->jenis,
            'agama' => $request-> agama,
            'alamat' => $request-> alamat,
            'email' => $request-> email,
            'asal_sklh' => $request-> asal,
            'nisn' => $request-> nisn,
            'rata_un' => $request-> rata,
        ];
    
        $insert2 = DB::connection('psb_online')->table('data_siswa')->insertGetId($data); 

        return redirect('/user/pendaftaran') ->with ('status', 'Data Siswa Berhasil Ditambahkan'); 
      
    }

    
}
