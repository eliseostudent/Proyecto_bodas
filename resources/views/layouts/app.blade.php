<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fontfaces CSS-->
    <link href="{{ asset('cool_admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cool_admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('cool_admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('cool_admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('cool_admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">


    <!-- Vendor CSS-->
    <link href="{{ asset('cool_admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cool_admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('cool_admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cool_admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cool_admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cool_admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('cool_admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet"
        media="all">
    <!-- Google icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Main CSS-->
    <link href="{{ asset('cool_admin/css/theme.css') }}" rel="stylesheet" media="all">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    @if (isset($estilos))
        {{ $estilos }}
    @endif
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

</head>

<body class="font-sans antialiased" id="inicio" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @if (isset($header_mobile))
            {{ $header_mobile }}
        @endif
        <!-- END HEADER MOBILE-->


        <!-- MENU SIDEBAR-->
        @if (isset($menu_sidebar))
            {{ $menu_sidebar }}
        @endif

        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('layouts.header_desktop')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <!-- Page Content -->
                <main>

                    {{ $slot }}
                </main>

            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>




    @stack('modals')

    @livewireScripts
    <!-- MENU SIDEBAR-->
    @if (isset($scriptsExtras))
        {{ $scriptsExtras }}
    @endif
    <!-- Jquery JS-->
    <script src="{{ asset('cool_admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('cool_admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('cool_admin/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('cool_admin/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('cool_admin/js/main.js') }}"></script>
    <script>
        function copyurl(id) {
            navigator.clipboard.writeText(id).then(() => {
                    alert("successfully copied:" + id);
                })
                .catch(() => {
                    alert("something went wrong");
                });
        }
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js">
    </script>
    @if (isset($tablescript))
        {{ $tablescript }}
    @endif

</body>

</html>
