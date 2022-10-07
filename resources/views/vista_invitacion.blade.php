<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>{{ $evento->nombre_1 }} & {{ $evento->nombre_2 }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap');

        .blanco_bordes {
            color: #fff;
            text-shadow: 0 0 2px #000;
        }

        h1 {

            font-weight: normal;
        }

        .baskerville {
            font-family: 'Libre Baskerville', serif;
        }

        .body {
            font-family: 'Libre Baskerville', serif;
        }

        .KhatijaCalligraphy {
            font-family: "KhatijaCalligraphy", sans-serif;
        }

        .MelodyVintage {
            font-family: "MelodyVintage", sans-serif;
        }

        .cursiva {
            /*font-family: 'Great Vibes', cursive;*/
            font-family: "MelodyVintage", sans-serif;
        }

        .activo {
            background-color: #fff;
        }

        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            z-index: 15;
            width: 60%;
            padding-left: 0;
            margin-left: -30%;
            text-align: center;
            list-style: none;
        }

        .carousel-indicators li {
            display: inline-block;
            width: 30px;
            height: 5px;
            margin: 1px;
            margin-right: 5px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #000\9;
            background-color: rgba(0, 0, 0, 0);
            border: 1px solid #fff;
            border-radius: 10px;
        }

        .carousel-indicators .active {
            width: 30px;
            height: 5px;
            background-color: #fff;
            margin-right: 5px;
        }

        #Envelope {
            /*
            margin-top: -150px;
            margin-left: -100px;
            */
            width: 80%;
            height: 80%;
            margin: auto;
            margin-top: 10%;
            margin-bottom: 10%;
        }

        #backFlap {
            height: 100px;
            width: 265px;
            position: absolute;
            background-color: #cc3770;
            /*
            margin-left: 264px;
            margin-top: 270px;
            */
        }

        #frontFlap1 {
            width: 0;
            height: 0;
            border-bottom: 155px solid #ea4c89;
            border-right: 265px solid transparent;
            /*
            margin-left: 264px;
            margin-top: 270px;
            */
            position: absolute;
        }

        #frontFlap2 {
            width: 0;
            height: 0;
            border-bottom: 156px solid #dc447f;
            border-left: 265px solid transparent;
            position: absolute;
            /*
            margin-top: 269px;
            margin-left: 265px;
            */
        }

        #OpenFlap {
            width: 0;
            height: 0;
            border-left: 134px solid transparent;
            border-right: 134px solid transparent;
            border-top: 80px solid #cc3770;
            /*
            margin-top: 270px;
            margin-left: 263px;
            */
            position: absolute;
        }

        #Paper {
            position: absolute;
            height: 150px;
            width: 223px;
            background-color: #f2f2f2;
            /*
            margin-left: 280px;
            margin-top: 270px;
            */
        }

        #Words {
            position: absolute;
            height: 10px;
            width: 75px;
            background-color: #d3d3d3;
            /*
            margin-left: 15px;
            margin-top: 30px;
            */
        }

        #Words:after {
            content: "";
            position: absolute;
            height: 10px;
            width: 30px;
            background-color: #d3d3d3;
            margin-top: -20px;
        }

        #circle {
            height: 0px;
            width: 0px;
            background-color: #2ecc71;
            /*
            margin-left: 170px;
            margin-top: -40px;
            */
            /*border-radius*/
            -webkit-border-radius: 75px;
            -moz-border-radius: 75px;
            border-radius: 75px;
            /*box-shadow*/
            -webkit-box-shadow: -3px 7px 0px rgba(61, 62, 61, 0.23);
            -moz-box-shadow: -3px 7px 0px rgba(61, 62, 61, 0.23);
            box-shadow: -3px 7px 0px rgba(61, 62, 61, 0.23);
        }


        #OpenFlapBack {
            width: 100%;
            height: 0;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid #cc3770;
            position: absolute;
            /*
            margin-top: 165px;
            margin-left: 264px;
            */
            opacity: 0.0;
        }

        #Shadow {
            background-color: #3a3d3c;
            height: 5%;
            width: 80%;
            position: absolute;
            /*
            margin-left: 265px;
            margin-top: 420px;
            */
        }
    </style>
</head>

<body id="inicio" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Container principal-->
    <nav class="navbar navbar-default navbar-fixed" style="margin-bottom: 0px;">
        <div class="container-fluid" style="display:block">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#inicio">
                    <h3 class="baskerville ">{{ $evento->nombre_1 }} & {{ $evento->nombre_2 }}</h3>
                </a>

            </div>
            <div class="collapse navbar-collapse baskerville " id="myNavbar">
                <ul class="nav navbar-nav navbar-right d-inline">
                    <li><a href="#datosDeInvitacion">Datos de invitacion</a></li>
                    <li><a href="#dondeYCuando">Donde y cuando</a></li>
                    <li><a href="#myCarousel">Fotos</a></li>
                    <li><a href="#mesaDeRegalos">Mesa de regalos</a></li>
                    <li><a href="#confirmarAsistencia">Confirmar asistencia</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="padding:0px; position: relative;">
        @if ($evento->ruta_foto_novios != '')
            <img src="{{ Storage::url($evento->ruta_foto_novios) }}" alt="Foto novios" style="width: 100%">
        @else
            <img src="{{ asset('app-images/foto_novios_default.jpg') }}" alt="Foto novios"style="width: 100%">
        @endif
        <div style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);font-size:5vw;">
            <div class="row">
                <div class="col">
                    <p class="KhatijaCalligraphy text-center blanco_bordes" style="font-size: 7vw">
                        {{ $evento->nombre_1 }} & {{ $evento->nombre_2 }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-center blanco_bordes cursiva">
                        {{ $evento->mensaje_principal }}
                    </p>
                </div>
            </div>
            <div class="row" style="font-size: 3vw;">
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="dias" class="text-center baskerville blanco_bordes"></p>
                    </div>
                    <div class="row">
                        <p class="text-center blanco_bordes">Dias.</p>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="horas" class="text-center blanco_bordes"></p>
                    </div>
                    <div class="row">
                        <p class="text-center blanco_bordes">Hrs.</p>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="minutos" class="text-center blanco_bordes"></p>
                    </div>
                    <div class="row">
                        <p class="text-center blanco_bordes">Min.</p>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="segundos" class="text-center blanco_bordes"></p>
                    </div>
                    <div class="row">
                        <p class="text-center blanco_bordes">Seg.</p>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <div id="datosDeInvitacion" class="container-fluid" style="padding:0px; position: relative;">
        <img src="{{ asset('app-images/fondo_boleto.jpg') }}" alt="fondo boleto"style="width: 100%; height:400px">
        <div style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%); ">
            <div class="row">
                <div class="col">
                    <h1 class="text-center  cursiva">
                        Datos del invitado
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class=" text-center baskerville">{{ $invitado->nombre_invitado }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-center  cursiva">
                        {{ $invitado->numero_boletos }} Boletos
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @if (!$evento->no_niños)
                        <h6 class=" text-center baskerville">No niños</h6>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div id="pruebas" class="container-fluid" style="padding:0px; position: relative;">
        <img src="{{ asset('app-images/fondo_boleto.jpg') }}" alt="fondo boleto"style="width: 100%; height:400px">
        <div style="position: absolute;top: 0%; left: 0%; width:100%; height:100%;  ">
            <div id="Envelope">
                <div id="Shadow"></div>
                <div id="OpenFlapBack"></div>
                <div id="backFlap"></div>
                <div id="Paper">
                    <div id="Words"></div>
                    <div id="circle"></div>
                </div>
                <div id="frontFlap2"></div>
                <div id="frontFlap1"></div>
                <div id="OpenFlap"></div>

            </div>
        </div>
    </div>
    <div id="dondeYCuando"class="container-fluid" style="padding:30px 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong class=" baskerville">Ceremonia</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            @if ($evento->lugar->ruta_foto_ceremonia != '')
                                <img src="{{ Storage::url($evento->lugar->ruta_foto_ceremonia) }}"
                                    alt="Foto lugar ceremonia" style="width: 100%;height: 300px;">
                            @else
                                <img src="{{ asset('app-images/foto_ceremonia_default.jpg') }}"
                                    alt="Foto lugar salon"style="width: 100%;height: 300px;">
                            @endif
                        </div>
                        <div class="form-group">
                            <p class="form-control-static baskerville"><b>{{ $evento->lugar->nombre_ceremonia }}</b>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="form-control-static baskerville"> <b>Cuando:</b> {{ $f_cer }}</p>
                        </div>
                        <div class="form-group">
                            <p class="form-control-static baskerville"> <b>Direccion:</b>
                                {{ $evento->lugar->direccion_ceremonia }}</p>
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <a style="width:50%;"
                                href="{{ 'https://www.google.com.mx/maps/search/' . $evento->lugar->direccion_ceremonia }}"><button
                                    style="width:100%;" class="btn btn-secondary btn-lg baskerville">Mapa</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong class="baskerville">Evento</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            @if ($evento->lugar->ruta_foto_salon != '')
                                <img src="{{ Storage::url($evento->lugar->ruta_foto_salon) }}" alt="Foto lugar salon"
                                    style="width: 100%; height: 300px;">
                            @else
                                <img src="{{ asset('app-images/foto_salon_default.jpg') }}"
                                    alt="Foto lugar salon"style="width: 100%; height: 300px;">
                            @endif
                        </div>
                        <div class="form-group">
                            <p class="form-control-static baskerville"><b>{{ $evento->lugar->nombre_salon }}</b></p>
                        </div>
                        <div class="form-group">
                            <p class="form-control-static baskerville"> <b>Cuando:</b>
                                {{ $f_sal }}</p>
                        </div>
                        <div class="form-group">
                            <p class="form-control-static baskerville"> <b>Direccion:</b>
                                {{ $evento->lugar->direccion_salon }}
                            </p>
                        </div>
                        <div class="form-group" style="text-align:center;">
                            <a style="width:50%;"
                                href="{{ 'https://www.google.com.mx/maps/search/' . $evento->lugar->direccion_salon }}"><button
                                    class="btn btn-secondary btn-lg baskerville" style="width:100%;">Mapa</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <h1 class="cursiva">Dresscode</h1>
        <div class="row">
            <div class="col"></div>
            <div class="col-3">
                @if ($evento->codigo_de_vestimenta == '0')
                    <img src="{{ asset('app-images/white_tie_icon.jpg') }}"
                        alt="white_tie_icon"style="width: 100%; ">
                @elseif ($evento->codigo_de_vestimenta == '1')
                    <img src="{{ asset('app-images/black_tie_icon.jpg') }}"
                        alt="black_tie_icon"style="width: 100%; ">
                @elseif ($evento->codigo_de_vestimenta == '2')
                    <img src="{{ asset('app-images/formal_icon.jpg') }}" alt="formal_icon"style="width: 100%; ">
                @else
                    <img src="{{ asset('app-images/cocktail_icon.png') }}" alt="cocktail_icon"style="width: 100%; ">
                @endif
            </div>
            <div class="col"></div>
        </div>
        @if ($evento->codigo_de_vestimenta == '0')
            <h3 class=" baskerville">White tie</h3>
        @elseif ($evento->codigo_de_vestimenta == '1')
            <h3 class=" baskerville">Black Tie</h3>
        @elseif ($evento->codigo_de_vestimenta == '2')
            <h3 class=" baskerville">Formal</h3>
        @else
            <h3 class=" baskerville">Cocktail</h3>
        @endif
        <br>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        @if (count($evento->fotos) == 1)
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ Storage::url($evento->fotos[0]->ruta_foto) }}"
                        alt="Foto novios">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        @elseif (count($evento->fotos) > 1)
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                @for ($i = 1; $i < count($evento->fotos); $i++)
                    <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
                @endfor
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ Storage::url($evento->fotos[0]->ruta_foto) }}"
                        alt="Foto novios">
                </div>
                @for ($i = 1; $i < count($evento->fotos); $i++)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ Storage::url($evento->fotos[$i]->ruta_foto) }}"
                            alt="Foto novios">
                    </div>
                @endfor

            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        @endif

    </div>


    <div id="mesaDeRegalos" class="container text-center">
        <h1 class="cursiva" style="padding-top:30px">Mesa de regalos</h1>
        <p class=" baskerville">
            Tu presencia es nuestro mayor regalo, pero si deseas obsequiarnos algo te adjuntamos algunas opciones
        </p>
        <div class="row">
            @foreach ($evento->mesas as $mesa)
                <div class="col">
                    <a href="{{ $mesa->enlace_mesa }}"><button type="button"
                            class="btn btn-outline-dark btn-lg btn-block" style="font-size:24px;margin-top:10px;"><i
                                class='fas fa-gift'></i> {{ $mesa->nombre_mesa }}</button></a>
                </div>
            @endforeach
        </div>
        <br>

        <div class="row"style="width:75%; padding-left: 25%;">
            <p class="w-100 baskerville" style="font-size: 24px; margin-bottom:20px">
                <a class="btn btn-outline-secondary w-100" data-toggle="collapse" href="#datosbancarios"
                    role="button" aria-expanded="false" aria-controls="datosbancarios" style="font-size: large;">
                    Datos bancarios
                </a>

            </p>
            <div class="collapse w-100" id="datosbancarios">
                <div class="card card-body">
                    <div class="row">
                        <p class="baskerville" style="padding-left:10%"><b>Titular:</b>
                            {{ $evento->banco->titular_banco }}</p>
                    </div>
                    <div class="row">
                        <p class="baskerville" style="padding-left:10%"><b>Cuenta banco:</b>
                            {{ $evento->banco->cuenta_banco }}</p>
                    </div>
                    <div class="row">
                        <p class="baskerville" style="padding-left:10%"><b>Cuenta CLABE:</b>
                            {{ $evento->banco->clabe_banco }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="confirmarAsistencia" class="container-fluid bg-secondary w-100 "
        style="position:relative; height:400px; padding:0px;">
        <div style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-white cursiva">
                        Confirmar asistencia
                    </h1>
                </div>
            </div>
            <form action="{{ route('confirm', $invitado) }}" method="post" class="form-horizontal">
                @method('PATCH')
                @csrf
                <div class="row form-group">
                    <p class="form-control-static text-white baskerville" style="padding-left: 16px"><b>Nombre:
                        </b>{{ $invitado->nombre_invitado }}</p>
                </div>
                <div class="row form-group">
                    <div class="col ">
                        <label class="form-control-label text-white baskerville">Confirmo que:</label>
                    </div>
                    <div class="col ">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label text-white baskerville">
                                    <input type="radio" id="radio1" name="confirmacion" value="0"
                                        class="form-check-input baskerville" checked>Asistire
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label text-white baskerville">
                                    <input type="radio" id="radio2" name="confirmacion" value="1"
                                        class="form-check-input baskerville">No asistire</label>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="row form-group">
                    <button type="submit" class="btn btn-outline-light w-100 baskerville"
                        style="font-size: 20px;">Enviar</button>
                </div>
            </form>
        </div>
    </div>




    <!-- Footer -->
    <footer id="contact" class="text-center">
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-5">
                <h1 class="cursiva"> Gracias por honrarnos con tu presencia </h1>
            </div>
            <div class="col"></div>
        </div>
        <a class="up-arrow" href="#inicio" data-toggle="tooltip" title="Inicio">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    </footer>
    <script>
        var el = $("#OpenFlapBack");
        var wi = el.width()
        var w = wi * .44 | 0; // calculate & trim decimals
        var w2 = wi * .35 | 0;
        el.css("border-left", "1px " + w + "px");
        el.css("border-right", "1px " + w + "px");
        el.css("border-bottom", "1px " + w2 + "px");
        el.css("width", "5px ");
    </script>
    <script>
        $("#Envelope").mouseover(function() {
            open();
        });
        $("#Envelope").mouseleave(function() {
            close();
        });

        function open() {
            $("#OpenFlap").animate({
                "opacity": "0"
            }, "slow");
            $("#circle").animate({
                "height": "70px",
                "width": "70px"
            }, "slow");
            $("#OpenFlapBack").animate({
                "opacity": "1"
            }, 1);
            $("#Paper").delay(140).animate({
                "margin-top": "197px"
            }, "slow");
        }

        function close() {
            $("#Paper").animate({
                "margin-top": "270px"
            }, "slow");
            $("#circle").animate({
                "height": "-70px",
                "width": "-70px"
            }, "slow");
            $("#OpenFlapBack").delay(600).animate({
                "opacity": "0"
            }, "slow");
            $("#OpenFlap").delay(300).animate({
                "opacity": "1"
            }, "slow");
        }
    </script>
    <script formato="{{ $evento->fecha_formato }}">
        document.currentScript = document.currentScript || (function() {
            var scripts = document.getElementsByTagName('script');
            return scripts[scripts.length - 1];
        })();
        var end = new Date(document.currentScript.getAttribute('formato'));

        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {

                clearInterval(timer);
                document.getElementById('countdown').innerHTML = 'Expirado!';

                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);
            document.getElementById('dias').innerHTML = days;
            document.getElementById('horas').innerHTML = hours;
            document.getElementById('minutos').innerHTML = minutes;
            document.getElementById('segundos').innerHTML = seconds;
        }

        timer = setInterval(showRemaining, 1000);
    </script>
    <script>
        $(document).ready(function() {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#inicio']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
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

</body>

</html>