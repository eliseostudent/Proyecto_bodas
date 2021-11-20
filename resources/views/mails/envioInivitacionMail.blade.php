<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
      .blanco_bordes{
          color: #fff;
          text-shadow: 0 0 2px #000;
      }
      .cursiva{
          font-family: 'Great Vibes', cursive;
      }
      .boton_principal{
        color: #5a5f64;
        background-color: transparent;
        background-image: none;
        border-color: #5a5f64;
        font-size:20px;
        margin-top:20px;
        margin-bottom:20px;
        border-radius: 5px;
      }
      .boton_principal:hover{
        background-color: #5a5f64;
        color:#fff;
      }
</style>
<body style="text-align: center; color:rgb(78, 78, 78); background-color:white;">

    <div class="blanco_bordes cursiva" style="width: 100%;font-size:60px">
        {{($evento->nombre_1)}} & {{$evento->nombre_2}}
    </div>
    <div style="width: 100%;">
        @if ($evento->ruta_foto_novios!="")
            <img src="{{$message->embed(Storage::url($evento->ruta_foto_novios))}}" alt="Foto novios" style="width: 100%">
        @else
            <img src="{{$message->embed(asset('app-images/foto_novios_default.jpg'))}}" alt="Foto novios"style="width: 100%">
        @endif
    </div>
    <div style="width: 100%;">
        {{$invitado->nombre_invitado}} estamos muy felices de invitarte a nuestra boda.
    </div>
    <div class="container-fluid" >
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <a href="{{route('invitacion',[$evento,$invitado])}}"><button class="boton_principal">Ver invitacion</button></a>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div style="width: 100%;">
        Recuerda confirmar tu asistencia al evento utilizando el formulario al final de la invitacion.
    </div>
    <div style="width: 100%;">
        Mira tu invitacion aqui-> {{route('invitacion',[$evento,$invitado])}}.
    </div>
</body>
</html>

