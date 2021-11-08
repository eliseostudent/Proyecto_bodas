<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>



        <!-- Fontfaces CSS-->
        <link href="{{asset('cool_admin/css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{asset('cool_admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">


        <!-- Vendor CSS-->
        <link href="{{asset('cool_admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('cool_admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
        <!-- Google icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Main CSS-->
        <link href="{{asset('cool_admin/css/theme.css')}}" rel="stylesheet" media="all">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none"style="background:#f5f5f5; box-shadow: 0px 2px 5px 0px rgb(0 0 0 / 10%);z-index: 3;">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="{{route('raiz')}}">
                                <img src="{{asset('storage/app-images/mobile-logo.png')}}" alt="Proyecto bodas" width="250"  />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list list-unstyled">
                            @auth
                                <li class="has-sub">
                                    <a href="{{ url('/dashboard') }}" class="js-arrow">Tablero</a>
                                </li>

                            @else
                                <li class="has-sub">
                                    <a href="{{ route('login') }}" class="js-arrow">Iniciar sesion</a>
                                </li>


                                @if (Route::has('register'))
                                    <li class="has-sub">
                                        <a href="{{ route('register') }}" class="js-arrow">Registrarse</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- END HEADER MOBILE-->



            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container pl-0">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop  d-none d-sm-none d-md-none d-lg-block .d-xl-block" style="left:0px">
                    <div class="section__content">
                        <div class="container-fluid">
                            <div class="header-wrap ">
                                <div  style="width:300px; background:none;left:0;">
                                    <a href="{{route('raiz')}}">
                                        <img src="{{asset('storage/app-images/mobile-logo.png')}}" alt="Proyecto bodas" />
                                    </a>
                                </div>
                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" >
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm  text-dark underline" >Tablero</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm  text-dark underline">Iniciar sesion</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-dark underline">Registrarse</a>
                                        @endif
                                    @endauth
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <!-- Page Content -->
                    <main>
                            <h1>Bienvenido</h1>
                            <h3>Que esperas para crear tu evento registrate y comienza a trabajar.</h3>
                    </main>

                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>

        </div>





        @stack('modals')

        @livewireScripts

        <!-- Jquery JS-->
        <script src="{{asset('cool_admin/vendor/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap JS-->
        <script src="{{asset('cool_admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
        <script src="{{asset('cool_admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
        <!-- Vendor JS       -->
        <script src="{{asset('cool_admin/vendor/slick/slick.min.js')}}">
        </script>
        <script src="{{asset('cool_admin/vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('cool_admin/vendor/animsition/animsition.min.js')}}"></script>
        <script src="{{asset('cool_admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
        </script>
        <script src="{{asset('cool_admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('cool_admin/vendor/counter-up/jquery.counterup.min.js')}}">
        </script>
        <script src="{{asset('cool_admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
        <script src="{{asset('cool_admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('cool_admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
        <script src="{{asset('cool_admin/vendor/select2/select2.min.js')}}">
        </script>

        <!-- Main JS-->
        <script src="{{asset('cool_admin/js/main.js')}}"></script>
    </body>
</html>
