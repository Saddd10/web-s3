<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function read_mhs()
    {
        $data_mahasiswa = \App\Mahasiswa::all();
        return view('admin.daftar_mahasiswa', ['data_mahasiswa' => $data_mahasiswa]);
    }

    public function edit_mhs($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        
    }

    public function read_pendaftar()
    {
        return view('admin.pendaftar_ujian');
    }

}
