<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //Tulis fungsi ini di bawah sini:
    public function index()
    {
    return view('profil_kampus');
    }
}
