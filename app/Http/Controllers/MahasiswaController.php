<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data_mahasiswa = \App\Mahasiswa::all();
        return view('mhs_dashboard', ['data_mahasiswa' => $data_mahasiswa]);
    }
}
