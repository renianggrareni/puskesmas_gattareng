<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Desa;

class DesaController extends Controller
{
    public function index()
    {
        // Mengambil semua data desa dari model Desa
        $desa = Desa::all();

        // Mengirimkan data desa ke tampilan desa.blade.php
        return view('/admin/desa', compact('desa'));
    }
}
