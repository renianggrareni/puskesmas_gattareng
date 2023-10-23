<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Halaman Administrator - Daftar Pasien</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon/logo-pkm.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/images/favicon/logo-pkm.png" sizes="16x16">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{(asset('back/css/styles.css'))}}" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            @section('sidebar')
                @include('layouts.back.inc.sidebar')
            @show
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                @section('header')
                    @include('layouts.back.inc.header')
                @show
                <!-- Page content-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                                <h5>Daftar Pasien Pendaftar Online</h5>
                                <style>
                                    h5 {
                                        text-align: center;
                                        margin-top: 10px;
                                        margin-bottom: 10px;
                                    }
                                </style>
                            </header>
                            <table class="table table-striped table-bordered table-hover table-responsive">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Alamat</th>
                                    <th>Poli Tujuan</th>
                                    <th>Tanggal</th>
                                </thead>
                                @foreach($daftar_pasien as $dp)
                                    <tbody>
                                        <td>{{$dp->id}}</td>
                                        <td>{{$dp->namapasien}}</td>
                                        <td>{{$dp->alamat}}</td>
                                        <td>{{$dp->politujuan}}</td>
                                        <td>{{$dp->tanggal}}</td>
                                    </tbody>
                                @endforeach    
                            </table>
                        </section>

                    </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{(asset('back/js/scripts.js'))}}"></script>
    </body>
</html>
