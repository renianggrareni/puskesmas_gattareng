<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ContentController;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    function show(){
        $data= Pasien::all();
        return view('admin.Daftarpasien',['daftar_pasien'=>$data]);
    }
}