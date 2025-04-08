<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peticia.org - zaregistrujte sa</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
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
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-0">
                        <img src="{{ asset('backend/img/undraw_Sign_in_re_o58h.svg')}}" alt="" width="430" height="470">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Vytvorte si účet</h1>
                            </div>

                            <x-jet-validation-errors class="mb-4  text-primary" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group ">
                                        <input id="name" type="text" name="name" class="form-control form-control-user"
                                            placeholder="Vaše meno/name">
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" name="email" class="form-control form-control-user"
                                        placeholder="Emailová adresu">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="password" type="password" name="password" class="form-control form-control-user"
                                             placeholder="Heslo/Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control form-control-user"
                                            placeholder="Heslo - zopakujte">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Zaregistrujte účet</button>


                               {{--  <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                            </form>
                            <hr>
                            {{-- <div class="text-center">
                                <a class="small" href="{{ route('password.request') }}">Zabudol som heslo/password na prihlásenie!</a>
                            </div> --}}
                            <div class="text-center py-2">
                                <a class="small" href="{{ route('login') }}">Už mám účet! Chcem sa prihlásiť!</a>
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
