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
        @import url('https://fonts.cdnfonts.com/css/century-gothic');


        .blanco_bordes {
            color: #fff;
            text-shadow: 5px 5px 8px #000;
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
            animation: shake 1s;
            animation-iteration-count: 0;
        }

        #backFlap {
            height: 100px;
            width: 265px;
            position: absolute;

            /*
            background-image: url({{ asset('app-images/brown-texture.jpg') }}  );
            background-size: cover;
            background-color: #7FB3D5;
            margin-left: 264px;
            margin-top: 270px;
            */
        }

        #frontFlap1 {
            width: 0;
            height: 0;

            /*
            margin-left: 264px;
            margin-top: 270px;
            border-bottom: 155px solid #A9CCE3;
            border-right: 265px solid transparent;
            */
            position: absolute;
        }

        #frontFlap2 {
            width: 0;
            height: 0;

            position: absolute;

            z-index: 3;
            /*
            background-image: url({{ asset('app-images/sobre.png') }}  );
            background-size: cover;
            border-bottom: 1px solid #D4E6F1;
            border-left: 1px solid transparent;
            margin-top: 269px;
            margin-left: 265px;
            */
        }

        #OpenFlap {
            width: 0;
            height: 0;
            position: absolute;

            z-index: 4;

            /*
            background-image: url({{ asset('app-images/sobre_tapa.png') }}  );
            background-size: cover;
            margin-top: 270px;
            margin-left: 263px;
            border-left: 134px solid transparent;
            border-right: 134px solid transparent;
            border-top: 80px solid #7FB3D5;
            */

        }

        #Paper {
            position: absolute;
            height: 150px;
            width: 223px;
            background-color: #f2f2f2;
            z-index: 1;
            /*
            margin-left: 280px;
            margin-top: 270px;
            */
        }

        #Words {
            /*
            position: absolute;
            height: 10px;
            width: 75px;
            background-color: #d3d3d3;
            
            margin-left: 15px;
            margin-top: 30px;
            */
        }


        #OpenFlapBack {
            width: 0;
            height: 0;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid #7FB3D5;
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

        #rotacion {
            position: absolute;
            z-index: 4;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            5% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            10% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            15% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            20% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            25% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            36% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            74% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            75% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            80% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            85% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            90% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            95% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            98% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }
    </style>
</head>

<body id="inicio" style="max-width: 800px;margin:auto;">

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block"
            style="width: 95%; margin:auto; margin-top:10px;margin-bottom:10px;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container-fluid" style="padding:0px; position: relative;">
        @if ($evento->ruta_foto_novios != '')
            <img src="{{ Storage::url($evento->ruta_foto_novios) }}" alt="Foto novios"
                style="width: 100%;height: 100vh;">
        @else
            <img src="{{ asset('app-images/foto_novios_default.jpg') }}" alt="Foto novios"style="width: 100%">
        @endif
        <div class="col" style="position: absolute;top: 0%; left: 0%; width:100%;height:100%;">
            <div class="row align-items-center" style="height: 33%;">
                <div class="col">
                    <p class="KhatijaCalligraphy text-center blanco_bordes" style="font-size: 2.8em; ">
                        {{ $evento->nombre_1 }} &
                        {{ $evento->nombre_2 }}</p>
                </div>
            </div>
            <div class="row align-items-center" style="height: 33%;">
                <div class="col">
                    <p class="text-center blanco_bordes cursiva"
                        style="font-size: 1.3em; text-shadow: 2px 2px 2px #000;">
                        "{{ $evento->mensaje_principal }}"
                    </p>
                </div>
            </div>
            <div class="row align-items-center blanco_bordes"
                style="font-size: 1em; height:33%; text-shadow: 2px 2px 2px #000; ">
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="dias" class="text-center baskerville " style="width: 100%;"></p>
                    </div>
                    <div class="row">
                        <p class="text-center " style="width: 100%;">Dias.</p>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="horas" class="text-center " style="width: 100%;"></p>
                    </div>
                    <div class="row">
                        <p class="text-center " style="width: 100%;">Hrs.</p>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="minutos" class="text-center " style="width: 100%;"></p>
                    </div>
                    <div class="row">
                        <p class="text-center " style="width: 100%;">Min.</p>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="row">
                        <p id="segundos" class="text-center " style="width: 100%;"></p>
                    </div>
                    <div class="row">
                        <p class="text-center " style="width: 100%;">Seg.</p>
                    </div>
                </div>
            </div>
            <span class="glyphicon glyphicon-chevron-down"
                style="position: absolute;width: 90%;margin-top: 90vh;color: rgba(0,0,0,0.8);font-size: 1.5em;text-align: center;"></span>
        </div>


    </div>

    <div id="pruebas" class="container-fluid" style="padding:0px; position: relative;">
        <img id="img_fondo_bolelto" src="{{ asset('app-images/fondo_boleto.png') }}"
            alt="fondo boleto"style="width: 100%; height:400px">
        <div style="position: absolute;top: 0%; left: 0%; width:100%; height:100%;  ">
            <div id="Envelope">

                <div id="Shadow"></div>
                <div id="OpenFlapBack"></div>
                <div id="backFlap">
                    <img src="{{ asset('app-images/brown-texture.jpg') }}"
                        alt="fondo boleto"style="width: 100%; height:100%">
                </div>
                <div id="Paper">
                    <div id="Words"></div>
                    <div id="datosDeInvitacion" class="container-fluid"
                        style="padding:0px; position: relative;height:100%">
                        <img src="{{ asset('app-images/boleto.jpg') }}"
                            alt="fondo boleto"style="width: 100%; height:100%">
                        <div style="position: absolute;top: 0%; left: 0%; width:100%; height:100%  ">
                            <div class="row h-25 " style="align-items: end;">
                                <div class="col">
                                    <h1 class="text-center  cursiva" style="font-size: 1.5em;">
                                        Apreciable
                                    </h1>
                                </div>
                            </div>
                            <div class="row h-25 " style="align-items: end;">
                                <div class="col">
                                    <h1 class=" text-center baskerville" style="font-size: 1.5em;">
                                        {{ $invitado->nombre_invitado }}</h1>
                                </div>
                            </div>
                            <div class="row h-25 align-items-center">
                                <div class="col">
                                    <h1 class="text-center "
                                        style="font-family: 'Century Gothic', sans-serif; font-size: 1em;">
                                        {{ $invitado->numero_boletos }} Boletos
                                    </h1>
                                </div>
                            </div>
                            <div class="row h-25 ">
                                <div class="col">
                                    @if (!$evento->no_niños)
                                        <h6 class=" text-center baskerville" style="font-size: 0.7em;">No niños</h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="frontFlap2">
                    <img src="{{ asset('app-images/sobre.png') }}" alt="sobre tapa"style="width: 100%; height:100%">
                </div>
                <div id="frontFlap1"></div>
                <div id="rotacion">
                    <div id="OpenFlap-second"></div>
                    <div id="OpenFlap">
                        <img src="{{ asset('app-images/sobre_tapa.png') }}"
                            alt="sobre tapa"style="width: 100%; height:100%">
                    </div>
                </div>


            </div>
            <div class="cursiva " id="mensaje_sobre"
                style="font-size: 2em; position: absolute; top: 20%; width: 80%; text-align: center; margin-left:10%;">
                Ábreme
            </div>
        </div>
    </div>
    <div id="dondeYCuando"class="container-fluid" style="padding:30px 30px;">
        <div class="row">
            <div class="col-md-6">
                <div class="card">

                    @if ($evento->lugar->ruta_foto_ceremonia != '')
                        <img src="{{ Storage::url($evento->lugar->ruta_foto_ceremonia) }}" alt="Foto lugar ceremonia"
                            class="card-img-top">
                    @else
                        <img src="{{ asset('app-images/foto_ceremonia_default.jpg') }}"
                            alt="Foto lugar salon"style="width: 100%;height: 300px;">
                    @endif
                    <div class="card-body card-block">
                        <div class="form-group">
                            <p class="form-control-static cursiva" style="text-align:center; font-size:28px;">
                                <b>{{ $evento->lugar->nombre_ceremonia }}</b>
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
                            <a style="width:50%;" href="https://maps.app.goo.gl/BzTs6LegLEJo1kuR9"><button
                                    style="width:100%;" class="btn btn-secondary btn-lg baskerville">Mapa</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">

                    @if ($evento->lugar->ruta_foto_salon != '')
                        <img src="{{ Storage::url($evento->lugar->ruta_foto_salon) }}" alt="Foto lugar salon"
                            class="card-img-top">
                    @else
                        <img src="{{ asset('app-images/foto_salon_default.jpg') }}"
                            alt="Foto lugar salon"style="width: 100%; height: 300px;">
                    @endif
                    <div class="card-body card-block">
                        <div class="form-group">
                            <p class="form-control-static cursiva" style="text-align: center; font-size: 28px;">
                                <b>{{ $evento->lugar->nombre_salon }}</b>
                            </p>
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
                            <a style="width:50%;" href="https://maps.app.goo.gl/ujobdFLncLwUG6Sd7"><button
                                    class="btn btn-secondary btn-lg baskerville" style="width:100%;">Mapa</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <h1 class="cursiva" style="margin-bottom: 15px;">Dresscode</h1>
        <div class="row">
            <div class="col"></div>
            <div class="col-9">
                @if ($evento->codigo_de_vestimenta == '0')
                    <img src="{{ asset('app-images/white_tie_icon.jpg') }}"
                        alt="white_tie_icon"style="width: 100%; ">
                @elseif ($evento->codigo_de_vestimenta == '1')
                    <img src="{{ asset('app-images/black_tie_icon.jpg') }}"
                        alt="black_tie_icon"style="width: 100%; ">
                @elseif ($evento->codigo_de_vestimenta == '2')
                    <img src="{{ asset('app-images/formal_icon.png') }}" alt="formal_icon"style="width: 100%; ">
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
            <h3 class=" baskerville" style="margin-top:15px;">Formal</h3>
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
                <div class="col-6">
                    <a href="{{ $mesa->enlace_mesa }}"><button type="button"
                            class="btn btn-outline-dark btn-lg btn-block" style="font-size:24px;margin-top:10px;"><i
                                class='fas fa-gift'></i> {{ $mesa->nombre_mesa }}</button></a>
                </div>
            @endforeach
        </div>
        <br>

        <div class="row">
            <p class="w-100 baskerville"
                style="font-size: 24px; margin-bottom:20px; margin-left:5%; margin-right:5%;">
                <a class="btn btn-outline-secondary w-100" data-toggle="collapse" href="#datosbancarios"
                    role="button" aria-expanded="false" aria-controls="datosbancarios" style="font-size: large;">
                    Datos bancarios
                </a>

            </p>
            <div class="collapse w-100" id="datosbancarios">
                <div class="card card-body" style="width: 90%;margin-left: 5%;">
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
                <div class="row form-group" style="width: 150%">
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
                            <div class="radio" style="width: 150%">
                                <label for="radio2" class="form-check-label text-white baskerville">
                                    <input type="radio" id="radio2" name="confirmacion" value="1"
                                        class="form-check-input baskerville">No asistire</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <button type="submit" class="btn btn-outline-light w-100 baskerville"
                        style="font-size: 20px;">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <div>
        <input type="hidden" name="checkenvelope" id="checkenvelope" value="closed">
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
        var wi = $("#Shadow").width();
        var w = wi / 2 | 0; // mitad del ancho
        var w2 = w * 0.6671 | 0; //altura en propocion

        el.css("border-left", w + "px solid transparent");
        el.css("border-right", w + "px solid transparent");
        el.css("border-bottom", w2 + "px solid #7FB3D5");
        el.css("margin-top", w + "px ");
        el.css("width", "0 px");
        var t = w2 * .685 | 0;
        el.css("top", "-" + t + "px");
        var back = $("#backFlap");
        back.css("width", wi + "px");
        back.css("height", w2 + "px");
        var ff2 = $("#frontFlap2");
        //ff2.css("border-left", wi + "px solid transparent");
        //ff2.css("border-bottom", (wi * 0.588 | 0) + "px solid #D4E6F1");
        ff2.css("width", wi + "px ");
        ff2.css("height", (wi * 0.6625 | 0) + "px");
        var ff1 = $("#frontFlap1");
        //ff1.css("border-right", wi + "px solid transparent");
        //ff1.css("border-bottom", (wi * 0.588 | 0) + "px solid #A9CCE3 ");
        var of1 = $("#OpenFlap");
        of1.css("width", wi + "px");
        of1.css("height", (wi * 0.3328 | 0) + "px");
        var rot = $("#rotacion");
        rot.css("margin-top", "-" + (wi * 0.3328 | 0) + "px");
        rot.css("height", ((wi * 0.3328 | 0) * 2) + "px");
        rot.css("width", wi + "px");
        var ofsec = $("#OpenFlap-second");
        ofsec.css("height", (wi * 0.3328 | 0) + "px");

        //of1.css("border-left", (w * 1.02 | 0) + "px solid transparent");
        //of1.css("border-right", w + "px solid transparent");
        //of1.css("border-top", (w * 0.65 | 0) + "px solid #7FB3D5");

        var p = $("#Paper");
        var wp = (wi * 0.97 | 0)
        var pp = (wi * 0.03 | 0)
        p.css("width", wp + "px");
        p.css("height", (wp * 0.60 | 0) + "px");
        p.css("margin-left", (pp / 2 | 0) + "px");
        p.css("margin-top", (wp * 0.073 | 0) + "px");
        var img_f = $("#img_fondo_bolelto");
        var h_img_f = (wp * 1.90 | 0)
        img_f.css("height", h_img_f + "px");
        $("#Envelope").css("margin-top", (h_img_f - (wi * 0.588 | 0)) / 2 + "px");
    </script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            var wi = $("#Shadow").width();
            var eh = $("#img_fondo_bolelto").width();
            var mw = (eh - (wi * 0.588 | 0)) / 2
            if (document.documentElement.scrollTop > mw) {
                var flag = document.getElementById("checkenvelope");
                if (flag.getAttribute('value') == "closed") {
                    $("#Envelope").css("animation-iteration-count", "infinite");
                }
            }
        }
    </script>
    <script>
        $("#Envelope").click(function() {
            var flag = document.getElementById("checkenvelope");
            if (flag.getAttribute('value') == "opened") {
                flag.setAttribute('value', "loading");
                close();
                setTimeout(function() {
                    flag.setAttribute('value', "closed");
                }, 1900);

            } else {
                if (flag.getAttribute('value') == "closed") {
                    flag.setAttribute('value', "loading");
                    open();
                    setTimeout(function() {
                        flag.setAttribute('value', "opened");
                    }, 1900);

                }

            }

        });

        function open() {
            $("#Envelope").css("animation-iteration-count", "0");
            $("#mensaje_sobre").animate({
                "opacity": "-=1"
            }, "slow");
            var h = $("#Paper").height();


            document.getElementById("rotacion").animate([{
                    "transform": "rotateX(0)"
                },
                {
                    "transform": "rotateX(3.142rad)"
                }
            ], {
                duration: 600,
                iterations: 1
            });
            var rot = $("#rotacion");
            rot.css("transform", "rotateX(3.142rad)");
            $("#rotacion").delay(600).animate({
                "z-index": "0"
            }, 1);
            $("#Paper").delay(600).animate({
                "z-index": "1"
            }, 1);

            $("#Paper").animate({
                "margin-top": "-" + (h * 1.073 | 0) + "px"
            }, "slow");
            $("#Paper").animate({
                "z-index": "5"
            }, 1);
            $("#Paper").animate({
                "margin-top": (h * 0.073 | 0) + "px"
            }, "slow");
        }

        function close() {


            var h = $("#Paper").height();
            $("#Paper").animate({
                "margin-top": "-" + (h * 1.073 | 0) + "px"
            }, "slow");

            $("#Paper").animate({
                "z-index": "1"
            }, 1);


            $("#Paper").animate({
                "margin-top": (h * 0.073 | 0) + "px"
            }, "slow");

            const newspaperSpinning = [{
                    transform: 'rotateX(3.142rad)'
                },
                {
                    transform: 'rotateX(0)'
                }
            ];
            const newspaperTiming = {
                duration: 600,
                iterations: 1,
                delay: 1200,
            }



            const rotacion = document.querySelector("#rotacion");
            rotacion.animate(newspaperSpinning, newspaperTiming);
            setTimeout(function() {
                var rot = $("#rotacion");
                rot.css("z-index", "4");
            }, 1200);
            setTimeout(function() {

                var rot = $("#rotacion");
                rot.css("transform", "rotateX(0)");
            }, 1800);
            $("#mensaje_sobre").delay(1800).animate({
                "opacity": "+=1"
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
