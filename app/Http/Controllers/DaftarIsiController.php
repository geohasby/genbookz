<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarIsiController extends Controller
{
    public function index(Request $request)
    {
        return view('daftar_isi' , ['user' => $request->user()]);
    }
}
