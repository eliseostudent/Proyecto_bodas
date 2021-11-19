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
</style>
<body style="text-align: center; color:white; background-color: rgb(185, 185, 185);">

    <div class="blanco_bordes cursiva" style="width: 100%;font-size:25px">
        {{($evento->nombre_1)}} & {{$evento->nombre_2}}
    </div>
    <div style="width: 100%;">
        {{$invitado->nombre_invitado}} estamos muy felices de invitarte a nuestra boda.
    </div>
    <div class="container-fluid" style="height: 200px">
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <a href="{{route('invitacion',[$evento,$invitado])}}"><button style="margin-top:100px;border-radius: 5px;background-color: #555555;color: white;">Ver invitacion</button></a>
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

