<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penpas;
use App\Models\Desa;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('adminMiddle');
    }

    public function index()
    {
        // Mengambil data jumlah pasien per desa menggunakan Eloquent
        $penpas = Penpas::join('desas', 'penpas.id_desa', '=', 'desas.id')
            ->select('desas.nama_desa', \DB::raw('count(penpas.id_desa) as count'))
            ->groupBy('desas.nama_desa')
            ->pluck('count', 'nama_desa');

        // Mengambil data persebaran pasien per desa per bulan menggunakan Eloquent
        $dataBar = Penpas::join('desas', 'penpas.id_desa', '=', 'desas.id')
            ->select(\DB::raw("date_format(tanggal, '%Y-%m') as bulan"), \DB::raw('count(*) as total'))
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $labels = $penpas->keys();
        $data = $penpas->values();

        // Mengelompokkan data per bulan ke dalam array
        $labelsBar = $dataBar->pluck('bulan');
        $dataValuesBar = $dataBar->pluck('total');

        return view('back.home', compact('labels', 'data', 'labelsBar', 'dataValuesBar'));
    }
}
