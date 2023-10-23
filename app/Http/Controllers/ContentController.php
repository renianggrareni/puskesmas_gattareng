<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    function penpas(){
        return view('penpas');
    }

    function add(Request $request){
        $request->validate([
            'namapasien'=>'required',
            'alamat'=>'required', // Validasi tidak diperlukan lagi jika menggunakan ENUM
            'politujuan'=>'required', // Validasi tidak diperlukan lagi jika menggunakan ENUM
            'tanggal'=>'required'
        ]);

        $alamat = $request->input('alamat'); // Ambil nilai alamat dari request
        $poliTujuan = $request->input('politujuan'); // Ambil nilai poli tujuan dari request

        // Pastikan alamat yang dimasukkan adalah salah satu ENUM yang valid
        $validAlamat = ['Alamat1', 'Alamat2', 'Alamat3', 'Alamat4', 'Alamat5', 'Alamat6', 'Alamat7'];
        // Pastikan poli tujuan yang dimasukkan adalah salah satu ENUM yang valid
        $validPoliTujuan = ['Poli1', 'Poli2', 'Poli3'];

        if (!in_array($alamat, $validAlamat)) {
            return back()->with('fail', 'Alamat tidak valid');
        }

        if (!in_array($poliTujuan, $validPoliTujuan)) {
            return back()->with('fail', 'Poli tujuan tidak valid');
        }

        $query = DB::table('daftar_pasien')->insert([
            'namapasien'=>$request->input('namapasien'),
            'alamat'=>$alamat, // Masukkan nilai alamat yang telah divalidasi
            'politujuan'=>$poliTujuan, // Masukkan nilai poli tujuan yang telah divalidasi
            'tanggal'=>$request->input('tanggal')
        ]);

        if($query){
            return back()->with('success', 'Pendaftaran berhasil dikirim!');
        }else{
            return back()->with('fail', 'Terjadi kesalahan');
        }
    }
}
