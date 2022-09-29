<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>{{$evento->nombre_1}} & {{$evento->nombre_2}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
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

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
        .blanco_bordes{
            color: #fff;
            text-shadow: 0 0 2px #000;
        }
        .cursiva{
            font-family: 'Great Vibes', cursive;
        }
        .activo{
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
            background-color: rgba(0,0,0,0);
            border: 1px solid #fff;
            border-radius: 10px;
        }
        .carousel-indicators .active {
            width: 30px;
            height: 5px;
            background-color: #fff;
            margin-right: 5px;
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
        <a class="navbar-brand" href="#inicio"><h3>{{$evento->nombre_1}} & {{$evento->nombre_2}}</h3></a>

      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right d-inline" >
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
    @if ($evento->ruta_foto_novios!="")
        <img src="{{Storage::url($evento->ruta_foto_novios)}}" alt="Foto novios" style="width: 100%">
    @else
        <img src="{{asset('app-images/foto_novios_default.jpg')}}" alt="Foto novios"style="width: 100%">
    @endif
    <div  style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);font-size: 5vw;">
        <div class="row">
            <div class="col">
                <p class="blanco_bordes text-center ">{{$evento->nombre_1}} & {{$evento->nombre_2}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center blanco_bordes cursiva">
                    {{$evento->mensaje_principal}}
                </p>
            </div>
        </div>
        <div class="row" style="font-size: 3vw;">
            <div class="col-xs-3 ">
              <div class="row">
                <p id="dias" class="text-center blanco_bordes"></p>
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
                <p class="text-center blanco_bordes" >Seg.</p>
              </div>
            </div>
        </div>

    </div>


</div>
<div id="datosDeInvitacion" class="container-fluid" style="padding:0px; position: relative;">
  <img  src="{{asset('app-images/fondo_boleto.jpg')}}" alt="Foto novios"style="width: 100%; height:400px">
  <div  style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="row">
      <div class="col">
          <h1 class="text-center  cursiva">
              Datos del invitado
          </h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <h1 class=" text-center ">{{$invitado->nombre_invitado}}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <h1 class="text-center  cursiva">
            {{$invitado->numero_boletos}} Boletos
          </h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        @if (!$evento->no_niños)
            <h1 class=" text-center ">No niños</h1>
        @endif
      </div>
    </div>
  </div>
</div>
<div id="dondeYCuando"class="container-fluid" style="padding:30px 30px;">
  <div class="row">
    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
              <strong>Ceremonia</strong>
          </div>
          <div class="card-body card-block">
              <div class="form-group">
                @if ($evento->lugar->ruta_foto_ceremonia!="")
                    <img src="{{Storage::url($evento->lugar->ruta_foto_ceremonia)}}" alt="Foto lugar ceremonia" style="width: 100%;height: 300px;">
                @else
                    <img src="{{asset('app-images/foto_ceremonia_default.jpg')}}" alt="Foto lugar salon"style="width: 100%;height: 300px;">
                @endif
              </div>
              <div class="form-group">
                <p class="form-control-static"><b>{{$evento->lugar->nombre_ceremonia}}</b></p>
                </div>
                <div class="form-group">
                <p class="form-control-static"> <b>Cuando:</b> {{$evento->lugar->fecha_ceremonia}}</p>
                </div>
                <div class="form-group">
                <p class="form-control-static"> <b>Direccion:</b> {{$evento->lugar->direccion_ceremonia}}</p>
                </div>
                <div class="form-group">
                <a href="{{"https://www.google.com.mx/maps/search/".$evento->lugar->direccion_ceremonia}}"><button class="btn btn-secondary btn-lg">Mapa</button></a>
                </div>
          </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
          <div class="card-header">
              <strong>Evento</strong>
          </div>
          <div class="card-body card-block">
            <div class="form-group">
                @if ($evento->lugar->ruta_foto_salon!="")
                    <img src="{{Storage::url($evento->lugar->ruta_foto_salon)}}" alt="Foto lugar salon" style="width: 100%; height: 300px;">
                @else
                    <img src="{{asset('app-images/foto_salon_default.jpg')}}" alt="Foto lugar salon"style="width: 100%; height: 300px;">
                @endif
              </div>
              <div class="form-group">
                  <p class="form-control-static"><b>{{$evento->lugar->nombre_salon}}</b></p>
              </div>
              <div class="form-group">
                <p class="form-control-static"> <b>Cuando:</b> {{$evento->lugar->fecha_ceremonia}}</p>
              </div>
              <div class="form-group">
                <p class="form-control-static"> <b>Direccion:</b> {{$evento->lugar->direccion_salon}}</p>
              </div>
              <div class="form-group">
                <a href="{{"https://www.google.com.mx/maps/search/".$evento->lugar->direccion_salon}}"><button class="btn btn-secondary btn-lg">Mapa</button></a>
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
            @if ($evento->codigo_de_vestimenta=="0")
                <img src="{{asset('app-images/white_tie_icon.jpg')}}" alt="white_tie_icon"style="width: 100%; ">
            @elseif ($evento->codigo_de_vestimenta=="1")
                <img src="{{asset('app-images/black_tie_icon.jpg')}}" alt="black_tie_icon"style="width: 100%; ">
            @elseif ($evento->codigo_de_vestimenta=="2")
                <img src="{{asset('app-images/formal_icon.jpg')}}" alt="formal_icon"style="width: 100%; ">
            @else
                <img src="{{asset('app-images/cocktail_icon.png')}}" alt="cocktail_icon"style="width: 100%; ">
            @endif
        </div>
        <div class="col"></div>
    </div>
    @if ($evento->codigo_de_vestimenta=="0")
        <h3>White tie</h3>
    @elseif ($evento->codigo_de_vestimenta=="1")
        <h3>Black Tie</h3>
    @elseif ($evento->codigo_de_vestimenta=="2")
        <h3>Formal</h3>
    @else
        <h3>Cocktail</h3>
    @endif
    <br>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    @if(count($evento->fotos)==1)
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img  class="d-block w-100" src="{{Storage::url($evento->fotos[0]->ruta_foto)}}" alt="Foto novios">
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
    @elseif (count($evento->fotos)>1)
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            @for ($i=1;$i<count($evento->fotos);$i++)
                <li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
            @endfor
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img  class="d-block w-100" src="{{Storage::url($evento->fotos[0]->ruta_foto)}}" alt="Foto novios">
            </div>
            @for ($i=1;$i<count($evento->fotos);$i++)
                <div class="carousel-item">
                    <img  class="d-block w-100" src="{{Storage::url($evento->fotos[$i]->ruta_foto)}}" alt="Foto novios">
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
  <p>
    Tu presencia es nuestro mayor regalo, pero si deseas obsequiarnos algo te adjuntamos algunas opciones
  </p>
  <div class="row">
        @foreach ($evento->mesas as $mesa )
            <div class="col">
                <a href="{{$mesa->enlace_mesa}}"><button type="button" class="btn btn-outline-dark btn-lg btn-block" style="font-size:24px;margin-top:10px;"><i class='fas fa-gift'></i> {{$mesa->nombre_mesa}}</button></a>
            </div>
        @endforeach
  </div>
  <br>
  <div class="row">
    <p class="w-100" style="font-size: 24px; margin-bottom:20px">
    <a class="btn btn-outline-secondary w-100" data-toggle="collapse" href="#datosbancarios" role="button" aria-expanded="false" aria-controls="datosbancarios" style="font-size: 24px;">
        Datos bancarios
    </a>

    </p>
    <div class="collapse w-100" id="datosbancarios">
        <div class="card card-body">
            <div class="row">
                <p style="padding-left:10%"><b>Titular:</b> {{$evento->banco->titular_banco}}</p>
            </div>
            <div class="row">
                <p style="padding-left:10%"><b>Cuenta banco:</b> {{$evento->banco->cuenta_banco}}</p>
            </div>
            <div class="row">
                <p style="padding-left:10%"><b>Cuenta CLABE:</b> {{$evento->banco->clabe_banco}}</p>
            </div>
        </div>
    </div>
  </div>
</div>
<div id="confirmarAsistencia" class="container-fluid bg-secondary w-100 " style="position:relative; height:300px; padding:0px;">
    <div style="position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);">
      <div class="row">
        <div class="col">
            <h1 class="text-center text-white cursiva">
                Confirmar asistencia
            </h1>
        </div>
      </div>
      <form action="{{route('invitado.update',$invitado)}}" method="post"  class="form-horizontal">
        @method('PATCH')
        @csrf
        <div class="row form-group">
            <p class="form-control-static text-white" style="padding-left: 16px"><b>Nombre: </b>{{$invitado->nombre_invitado}}</p>
        </div>
        <div class="row form-group">
            <div class="col ">
                <label class="form-control-label text-white">Confirmo que:</label>
            </div>
            <div class="col ">
                <div class="form-check">
                    <div class="radio">
                        <label for="radio1" class="form-check-label text-white">
                            <input type="radio" id="radio1" name="confirmacion" value="0" class="form-check-input" checked>Asistire
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radio2" class="form-check-label text-white">
                            <input type="radio" id="radio2" name="confirmacion" value="1" class="form-check-input">No asistire</label>
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
            <button type="submit" class="btn btn-outline-light w-100" style="font-size: 20px;">Enviar</button>
        </div>
      </form>
    </div>
  </div>




<!-- Footer -->
<footer id="contact"  class="text-center">
  <h3 class="text-center">Quieres crear una invitacion asi?</h3>
  <div class="row">
    <div class="col"></div>
    <div class="col-sm-5">
        <div style="width:100%; background:none;">
            <a href="{{route('raiz')}}">
                <img src="{{asset('app-images/mobile-logo.png')}}" alt="Proyecto bodas" />
            </a>
          </div>
    </div>
    <div class="col"></div>
  </div>
  <a class="up-arrow" href="#inicio" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>
<script formato="{{$evento->fecha_formato}}">
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
            document.getElementById('dias').innerHTML=days;
            document.getElementById('horas').innerHTML=hours;
            document.getElementById('minutos').innerHTML=minutes;
            document.getElementById('segundos').innerHTML=seconds;
        }

        timer = setInterval(showRemaining, 1000);
  </script>
<script>
$(document).ready(function(){
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
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
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
