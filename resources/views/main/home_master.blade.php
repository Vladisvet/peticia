@php
    $seo = DB::table('seos')->first();
@endphp
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="{{ $seo->meta_author}}">
    <meta name="keywords" content="{{ $seo->meta_keyword}}">
    <meta name="description" content="{{ $seo->meta_description}}">
    <meta name="google_verification" content="{{ $seo->google_verification}}">




    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ $seo->meta_title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    {{-- <link rel="icon" type="image/icon" sizes="" href="{{ asset('backend_user/assets/img/faviconpet/users1.jpg')}}"> --}}
    <link rel="icon" type="image/icon" sizes="" href="{{ asset('backend_user/assets/img/faviconpet/users2.png')}}">
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend_user/assets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend_user/assets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend_user/assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend_user/assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{ asset('backend_user/assets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{ asset('backend_user/assets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff"> --}}


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('backend_user/assets/css/theme.css') }}" rel="stylesheet" />


    <!--  Bootstrap Icons  Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- ===============================================-->
    <!--    Summernote-->
    <!-- ===============================================-->
     <!-- include libraries(jQuery, bootstrap) -->
     {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

     <!-- AddToAny zdielanie-->
     {{-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61e028a2aa3f60001954c163&product=inline-share-buttons" async="async"></script> --}}
     @livewireStyles
  </head>

    @livewireScripts
  <body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    @include('main.body.header')

    @yield('content')
</main>
    @include('main.body.footer')
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('backend_user/vendors/@popperjs/popper.min.js')}}"></script>
    <script src="{{ asset('backend_user/vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('backend_user/vendors/is/is.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('backend_user/vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{ asset('backend_user/assets/js/theme.js')}}"></script>

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!--Bootstrap Enable popovers -->
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })
</script>



</body>
</html>
