<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Puskesmas Gattareng - Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-pkm.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-pkm.png') }}" sizes="16x16">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            @section('sidebar')
                @include('layouts.back.inc.sidebar')
            @show
        </div>
        <!-- Page content wrapper -->
        <div class="col-md-9">
            <!-- Top navigation -->
            @section('header')
                @include('layouts.back.inc.header')
            @show
            <h1 class="text-center mb-4">Daftar Pasien Pendaftar Online</h1>
            <div class="container">
            @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
            @endif
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{ url('/admin/DaftarPenpas')}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                <a href="{{ url('/admin/tambahdata') }}" class="btn btn-success">Tambah +</a>
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Desa Pasien</th>
                            <th scope="col">Alamat Lengkap</th>
                            <th scope="col">Poli Tujuan</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $index => $row)
                            <tr>
                                <th scope="row">{{ $index + $data->firstItem() }}</th>
                                <td>{{ $row->nama}}</td>
                                <td>{{ $row->alamat}}</td>
                                <td>{{ $row->alamatlengkap}}</td>
                                <td>{{ $row->politujuan}}</td>
                                <td>{{ $row->tanggal}}</td>
                                <td>
                                    <a href="/tampildata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a >
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
