<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProfilController;

Route::get('/', function () {
    return view('profil_kampus');
});
Route::get('/profil',[ProfilController::class, 'index']);