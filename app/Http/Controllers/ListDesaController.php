<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListDesa;
use Charts;

class ListDesaController extends Controller
{
    public function index()
    {
        $desaData = ListDesa::all();
        
        $chart = Charts::create('pie', 'highcharts')
            ->title('Grafik Jumlah Penduduk Desa')
            ->labels($desaData->pluck('nama'))
            ->values($desaData->pluck('jumlah_penduduk'))
            ->dimensions(1000, 500);

        return view('admin/listdesa', compact('desaData', 'chart'));
    }
}
