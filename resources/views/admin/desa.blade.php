<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPT Puskesmas Gattareng - Daftar Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/desa.css') }}">
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
            <h2 class="text-center mb-4">Daftar Desa Wilayah Puskesmas Gattareng</h2>
                <div class="desa-container">
                    @foreach ($desa as $desa)
                        <div class="desa-bar">
                            <span class="desa-name">{{ $desa->nama_desa }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        &copy; {{ date('Y') }} Puskesmas Gattareng
    </footer>
</body>
</html>
