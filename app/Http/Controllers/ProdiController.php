<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index()
    {
        $kampus = "Universitas Multi Data Palembang";
        $fakultas = ["Fakultas ILKOM UMDP","Fakultas ILEKON"];
        return view('fakultas.index', compact('fakultas','kampus'));
        }
}
