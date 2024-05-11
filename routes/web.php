<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/fakultas', function () {
    $kampus = "Universitas Multi Data Palembang";
    $fakultas = ["Fakultas ILKOM UMDP","Fakultas ILEKON"];
    return view('fakultas.index', compact('fakultas','kampus'));
});

route::get('/prodi',[ProdiController::class,'index']);