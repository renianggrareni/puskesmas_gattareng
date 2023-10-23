<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{csrf_token()}}">
         <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-pkm.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon/logo-pkm.png') }}" sizes="16x16">

        <title>Halaman Administrator</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{(asset('back/css/styles.css'))}}" rel="stylesheet" />

        <!-- Custom CSS for sticky footer -->
        <style>
            html, body {
                height: 100%;
                overflow: hidden; /* Mencegah scroll */
            }
            body {
                display: flex;
                flex-direction: column;
            }
            #wrapper {
                flex: 1;
                overflow-y: auto; /* Mengaktifkan scroll di area konten jika kontennya lebih panjang dari layar */
            }
            footer {
                text-align: center;
                padding: 10px;
                background-color: #f8f9fa; /* Warna latar belakang footer */
            }
        </style>
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
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer>
            &copy; {{ date('Y') }} Puskesmas Gattareng
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{(asset('back/js/scripts.js'))}}"></script>
    </body>
</html>
