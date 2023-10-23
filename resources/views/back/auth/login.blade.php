<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - Admin</title>
        <link href="{{asset('back/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/images/favicon/logo-pkm.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/images/favicon/logo-pkm.png" sizes="16x16"> 
    </head>
    <body class="bg-lightgray">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 mx-auto">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login - Administrator</h3></div>
                                    <div class="card-body">
                                        @if (Session::has('succes'))
                                            <div class="alert alert-success" role="alert">
                                                {{Session::get('succes')}}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{route('admin.login')}}" novalidate>
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    <input class="form-control @error('email') is-invalid @enderror" id="inputEmailAddres" type="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}" />
                                                </div>
                                                @error('email')
                                                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    <input class="form-control @error('email') is-invalid @enderror" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                                @enderror
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary">{{__('login')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer class="text-center py-3">
            &copy; 2023 Puskesmas Gattareng
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('back/js/scripts.js')}}"></script>
    </body>
</html>
