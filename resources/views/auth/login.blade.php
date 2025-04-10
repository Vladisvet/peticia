<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peticia.org - prihláste sa</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

        <!-- Favicon custom -->
        <link rel="icon" type="image/icon" sizes="" href="{{ asset('backend_user/assets/img/faviconpet/users2.png')}}">

</head>

<body class="bg-gradient-light">

    <div class="container">
        <br><br><br>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-0 mt-3">
                                <img src="{{ asset('backend/img/undraw_secure_login_pdn4.svg')}}" width="450px" height="600px" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="px-5 pt-5 mt-4">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mt-5 pt-5">Vitajte!</h1>
                                        <div class="small mb-2">Môžete sa prihlásiť do vášho účtu</div>
                                    </div>

                                    <x-jet-validation-errors class="mb-4 text-primary" />
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" name="email" class="form-control form-control-user"
                                                aria-describedby="emailHelp"
                                                placeholder="Zadajte vašu  emailovú adresu...">
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" name="password" class="form-control form-control-user"
                                                 placeholder="Heslo/Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label pt-1" for="customCheck">Zapamätaj si ma</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Prihlásiť sa</button>

                                        {{-- <x-jet-button class="ml-4" class="btn btn-primary btn-user btn-block">
                                            {{ __('Log in') }}
                                        </x-jet-button> --}}


                                        {{-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('password.request') }}">Zabudol som heslo/password na prihlásenie!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Vytvoriť účet!</a>
                                    </div>
                                    <hr>
                                    <div class="text-center pt-2">
                                        <a class="small" href="{{ url('/') }}">Späť na hlavnú stránku</a>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
