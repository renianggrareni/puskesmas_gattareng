<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Penpas;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;



class PenpasController extends Controller
{
    public function penpas()
    {
        return view('penpas');
    }

    public function index(Request $request)
    {
        $katakunci = $request->input('katakunci');

        // Query data sesuai dengan kriteria pencarian jika ada kata kunci
        $query = Penpas::select(DB::raw("penpas.nama as nama"),DB::raw("penpas.id as id"),DB::raw("penpas.alamat as alamatlengkap"),DB::raw("desas.nama_desa as alamat"),DB::raw("penpas.politujuan as politujuan"),DB::raw("penpas.tanggal as tanggal"))->join("desas","penpas.id_desa","=","desas.id");
        if ($katakunci) {
            $query->where('nama', 'like', '%' . $katakunci . '%')
                  ->orWhere('alamat', 'like', '%' . $katakunci . '%')
                  ->orWhere('nama_desa', 'like', '%' . $katakunci . '%')
                  ->orWhere('politujuan', 'like', '%' . $katakunci . '%')
                  ->orWhere('tanggal', 'like', '%' . $katakunci . '%');
        }

        // Ambil data sesuai dengan query yang telah dibuat
        $data = $query->paginate(5);
        return view('/admin/DaftarPenpas', compact('data'));
    }

    public function pieDiagram()
    {
        // Query untuk menghitung jumlah pasien dari setiap desa
        $data = DB::table('penpas')
            ->select('desas.nama_desa', DB::raw('COUNT(*) as total'))
            ->join('desas', 'penpas.id_desa', '=', 'desas.id')
            ->groupBy('desas.nama_desa')
            ->get();

        // Pisahkan data menjadi labels (nama desa) dan data (total pasien)
        $labels = $data->pluck('nama_desa');
        $totalPasien = $data->pluck('total');

        // Kirim data ke halaman dengan pie diagram
        return View::make('admin.back.home', compact('labels', 'totalPasien'));
    }

    public function tambahdata()
    {
        return view('admin/tambahdata');
    }

    public function insertdata(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'politujuan' => 'required',
            'tanggal' => 'required',
            'id_desa' => 'required',
        ]);
        Penpas::create($request->all());

        // Pesan sukses untuk form penambahan data pada halaman /admin/tambahdata
        if ($request->is('admin/tambahdata')) {
            return Redirect::to('admin/penpas')->with('success', 'Data pasien berhasil ditambahkan.');
        }

        // Pesan sukses untuk halaman /admin/penpas
        return Redirect::to('penpas')->with('success', 'Pendaftaran berhasil dikirim, silahkan datang kepuskesmas sesuai tanggal berobat.');
    }


    public function tampildata($id)
    {
        $data = Penpas::find($id);
        // tulis code untuk query sql 2 tabel pakai query builder laravel
        return view('/admin/editpenpas', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Penpas::find($id);
        $data->update($request->all());
        
        return redirect::to('/admin/penpas')->with('success', 'Data pasien berhasil diupdate.');
    }

    public function delete($id)
    {
        $data = Penpas::find($id);
        $data->delete();
        return redirect::to('/admin/penpas')->with('success', 'Data pasien berhasil dihapus.');
    }
}
