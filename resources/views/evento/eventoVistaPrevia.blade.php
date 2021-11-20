<div class="container text-center">
    <div class="row">
        <div class="col">
            Aqui se muestra una vista previa de la informacion a mostrar, los datos del invitado asi como algunos colores y funciones varian a la vista final.
        </div>
    </div>
</div>
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
        <div class="row">
            <div class="col">
                <p id="countdown"class="text-center blanco_bordes "></p>
            </div>
        </div>
        <div class="row" style="font-size: 3vw;">
            <div class="col ">
              <div class="row">
                <p id="dias" class="text-center blanco_bordes"></p>
              </div>
              <div class="row">
                <p class="text-center blanco_bordes">Dias.</p>
              </div>
            </div>
            <div class="col ">
              <div class="row">
                <p id="horas" class="text-center blanco_bordes"></p>
              </div>
              <div class="row">
                <p class="text-center blanco_bordes">Hrs.</p>
              </div>
            </div>
            <div class="col ">
              <div class="row">
                <p id="minutos" class="text-center blanco_bordes"></p>
              </div>
              <div class="row">
                <p class="text-center blanco_bordes">Min.</p>
              </div>
            </div>
            <div class="col ">
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
  <img  src="{{asset('app-images/fondo_boleto.jpg')}}" alt="Fondo boleto"style="width: 100%; height:400px">
  <div  style="font-size:5vw; position: absolute;top: 50%; left: 50%; transform: translate(-50%, -50%);">
    <div class="row">
      <div class="col">
          <h1 class="text-center  cursiva">
              Datos del invitado
          </h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <h1 class=" text-center ">Fam. Test</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
          <h1 class="text-center  cursiva">
              2 Boletos
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
    <h1 class="cursiva" style="font-size: 5vw;">Dresscode</h1>
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
  <h1 class="cursiva" style="font-size: 5vw; padding-top:30px">Mesa de regalos</h1>
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
            <h1 class="text-center text-white cursiva" style="font-size: 5vw">
                Confirmar asistencia
            </h1>
        </div>
      </div>
        <input type="hidden" name="evento_id" value="1">
        <div class="row form-group">
            <p class="form-control-static text-white" style="padding-left: 16px"><b>Nombre:</b> Fam.test</p>
        </div>
        <div class="row form-group">
            <div class="col ">
                <label class="form-control-label text-white">Confirmo que:</label>
            </div>
            <div class="col ">
                <div class="form-check">
                    <div class="radio">
                        <label for="radio1" class="form-check-label text-white">
                            <input type="radio" id="radio1" name="radios" value="0" class="form-check-input" checked>Asistire
                        </label>
                    </div>
                    <div class="radio">
                        <label for="radio2" class="form-check-label text-white">
                            <input type="radio" id="radio2" name="radios" value="1" class="form-check-input">No asistire</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <button class="btn btn-outline-light w-100" style="font-size: 20px;">Enviar</button>
        </div>
    </div>
  </div>




<!-- Footer -->
<footer id="contact"  class="text-center">
  <h3 class="text-center">Quieres crear una invitacion asi?</h3>
  <div class="row">
    <div class="col"></div>
    <div class="col-sm-5">
        <div style="width:100%; background:none;">
                <img src="{{asset('app-images/mobile-logo.png')}}" alt="Proyecto bodas" />

          </div>
    </div>
    <div class="col"></div>
  </div>
</footer>
