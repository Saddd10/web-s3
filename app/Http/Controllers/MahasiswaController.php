<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mhs_dashboard');
    }

    public function daftar_skd1()
    {
        return view('seminar1');
    }

    public function daftar_skd2()
    {
        return view('seminar2');
    }
}
