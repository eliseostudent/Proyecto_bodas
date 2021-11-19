<x-app-layout>
    <x-slot name="menu_sidebar">
        @include('layouts.menu_sidebar')
    </x-slot>
    <x-slot name="header_mobile">
        @include('layouts.header_mobile_menu')
    </x-slot>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Informacion general</strong>: {{$evento->nombre_evento}}
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('evento.update',$evento)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                @method('PATCH')
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label class=" form-control-label">Identificador del evento:</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <p class="form-control-static">{{$evento->id}}</p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label class=" form-control-label">Contraseña de acceso al evento:</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <p class="form-control-static">{{$evento->contraseña_del_evento}}</p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="nombre_1" class=" form-control-label">Nombre</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="nombre_1" name="nombre_1" placeholder="Nombre" class="form-control" value="{{$evento->nombre_1 ?? ''}}" required maxlength="64">
                                        <small class="form-text text-muted">Ingrese el nombre de la novia o novio</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="nombre_2" class=" form-control-label">Nombre</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="nombre_2" name="nombre_2" placeholder="Nombre" class="form-control" value="{{$evento->nombre_2 ?? ''}}" required maxlength="64">
                                        <small class="form-text text-muted">Ingrese el nombre de la novia o novio</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="fecha_evento" class=" form-control-label">Fecha</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="date" id="fecha_evento" name="fecha_evento" class="form-control" value={{$evento->fecha_evento ?? ''}} required>
                                        <small class="help-block form-text">Ingresa la fecha del gran dia</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="hora_evento" class=" form-control-label">Hora</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="time" id="hora_evento" name="hora_evento" class="form-control" value={{$evento->hora_evento ?? '15:00'}} required>
                                        <small class="help-block form-text">Ingresa la hora del gran evento</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label class=" form-control-label">Niños</label>
                                    </div>
                                    <div class="col col-md-8">
                                        <div class="form-check">
                                            <div class="radio">
                                                <label for="radio1" class="form-check-label ">
                                                    <input type="radio" id="radio1" name="no_niños" value="1" class="form-check-input" style="border:2px solid rgba(0,0,0,0.2);"
                                                    @if ($evento->no_niños)
                                                        checked
                                                    @endif
                                                    >Niños
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="no_niños" value="0" class="form-check-input" style="border:2px solid rgba(0,0,0,0.2);"
                                                    @if (!$evento->no_niños)
                                                        checked
                                                    @endif
                                                    >No niños
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="codigo_de_vestimenta" class=" form-control-label">Codigo de vestimenta</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <select name="codigo_de_vestimenta" id="codigo_de_vestimenta" class="form-control">
                                            <option value="0"
                                            @if ($evento->codigo_de_vestimenta=="0")
                                                selected
                                            @endif
                                            >White Tie</option>
                                            <option value="1"
                                            @if ($evento->codigo_de_vestimenta=="1")
                                            selected
                                            @endif
                                            >Black Tie</option>
                                            <option value="2"
                                            @if ($evento->codigo_de_vestimenta=="2")
                                            selected
                                            @endif
                                            >Formal</option>
                                            <option value="3"
                                            @if ($evento->codigo_de_vestimenta=="3")
                                            selected
                                            @endif
                                            >Cocktail</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="foto_novios" class=" form-control-label" >Foto principal</label>
                                    </div>
                                    <div class="col-12 ">
                                        @if ($evento->ruta_foto_novios!="")
                                            <img src="{{Storage::url($evento->ruta_foto_novios)}}" alt="Foto novios" style="width: 100%">
                                        @else
                                            <img src="{{asset('storage/app-images/foto_novios_default.jpg')}}" alt="Foto novios"style="width: 100%">
                                        @endif
                                        <br>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <input type="file" id="foto_novios" name="foto_novios" class="form-control-file"  accept="image/png, image/jpeg">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="mensaje_principal" class=" form-control-label">Mensaje principal</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="mensaje_principal" id="mensaje_principal" placeholder="Nuestra boda" class="form-control" value="{{$evento->mensaje_principal ?? ''}}" required>
                                    </div>
                                </div>
                                <div class="row form-group " style=" padding-left: 5px">
                                        <button type="submit" class="btn btn-primary btn-sm"  >
                                            <i class="fa fa-dot-circle-o"></i> Guardar
                                        </button>

                                </div>
                            </form>


                            <form action="{{route('lugar.update',$evento->lugar)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @method('PATCH')
                                @csrf
                                <div class="row form-group">
                                    <div class="col-12 card-header">
                                        <strong>Ceremonia religiosa</strong>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="nombre_ceremonia" class=" form-control-label">Nombre del lugar</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="nombre_ceremonia" name="nombre_ceremonia" placeholder="Nombre" class="form-control" value="{{$evento->lugar->nombre_ceremonia ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese el nombre del lugar donde sera la ceremonia</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="direccion_ceremonia" class=" form-control-label">Direccion del lugar</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="direccion_ceremonia" name="direccion_ceremonia" placeholder="Direccion" class="form-control" value="{{$evento->lugar->direccion_ceremonia ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese la direccion donde sera la ceremonia</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="fecha_ceremonia" class=" form-control-label">Fecha y hora de la ceremonia</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="datetime-local" id="fecha_ceremonia" name="fecha_ceremonia"  class="form-control" value="{{$evento->lugar->fecha_ceremonia ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese la fecha y hora de la ceremonia</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="foto_ceremonia" class=" form-control-label">Foto del lugar</label>
                                    </div>
                                    <div class="col-12 ">
                                        @if ($evento->lugar->ruta_foto_ceremonia!="")
                                            <img src="{{Storage::url($evento->lugar->ruta_foto_ceremonia)}}" alt="Foto lugar ceremonia" style="width: 100%;">
                                        @else
                                            <img src="{{asset('storage/app-images/foto_ceremonia_default.jpg')}}" alt="Foto lugar ceremonia"style="width: 100%;">
                                        @endif
                                        <br>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="file" id="foto_ceremonia" name="foto_ceremonia" class="form-control-file" accept="image/png, image/jpeg">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 card-header">
                                        <strong>Lugar del evento</strong>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="nombre_salon" class=" form-control-label">Nombre del lugar</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="nombre_salon" name="nombre_salon" placeholder="Nombre" class="form-control" value="{{$evento->lugar->nombre_salon ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese el nombre del lugar donde sera la celebracion</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="direccion_salon" class=" form-control-label">Direccion del lugar</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="direccion_salon" name="direccion_salon" placeholder="Direccion" class="form-control" value="{{$evento->lugar->direccion_salon ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese la direccion donde sera la celebracion</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="fecha_salon" class=" form-control-label">Fecha y hora del evento</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="datetime-local" id="fecha_salon" name="fecha_salon"  class="form-control" value="{{$evento->lugar->fecha_ceremonia ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese la fecha y hora del evento</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="foto_salon" class=" form-control-label">Foto del lugar</label>
                                    </div>
                                    <div class="col-12 ">
                                        @if ($evento->lugar->ruta_foto_salon!="")
                                            <img src="{{Storage::url($evento->lugar->ruta_foto_salon)}}" alt="Foto lugar salon" style="width: 100%;">
                                        @else
                                            <img src="{{asset('storage/app-images/foto_salon_default.jpg')}}" alt="Foto lugar salon"style="width: 100%;">
                                        @endif
                                        <br>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="file" id="foto_salon" name="foto_salon" class="form-control-file" accept="image/png, image/jpeg">
                                    </div>
                                </div>

                                <div class="row form-group " style=" padding-left: 5px">
                                    <button type="submit" class="btn btn-primary btn-sm"  >
                                        <i class="fa fa-dot-circle-o"></i> Guardar
                                    </button>

                                </div>
                            </form>
                            <div class="row form-group">
                                <div class="col-12 card-header">
                                    <strong>Mesa de regalos</strong>
                                </div>
                            </div>
                            <ul>
                                @foreach ($evento->mesas as $mesa )
                                    <form action="{{route('mesa.destroy',$mesa)}}" method='POST'>
                                        @method('DELETE')
                                        @csrf
                                        <li>
                                            {{$mesa->nombre_enlace . ' '}} <button type="submit"class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button>
                                        </li>
                                    </form>
                                    <br>
                                @endforeach
                            </ul>
                            <form action="{{route('store_mesa')}}" method="POST"  class="form-horizontal">
                                @csrf
                                <input type="hidden" name="evento_id" value="{{$evento->id}}">

                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="nombre_mesa" class=" form-control-label">Nombre de la mesa</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="nombre_mesa" name="nombre_mesa" placeholder="Nombre" class="form-control" required>
                                        <small class="form-text text-muted">Ingrese el nombre del provedor (ejemplo: liverpool)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="enlace_mesa" class=" form-control-label">Enlace a mesa</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="enlace_mesa" name="enlace_mesa" placeholder="" class="form-control" required>
                                        <small class="form-text text-muted">Copie y pegue el enlace a la mesa de regalos generado por el provedor.</small>
                                    </div>
                                </div>

                                <div class="row form-group " style=" padding-left: 5px">
                                    <button type="submit" class="btn btn-primary btn-sm"  >
                                        <i class="fa fa-dot-circle-o"></i> Agregar
                                    </button>

                                </div>
                            </form>
                            <form action="{{route('banco.update',$evento->banco)}}" method="post"  class="form-horizontal">
                                @method('PATCH')
                                @csrf
                                <div class="row form-group">
                                    <div class="col-12 card-header">
                                        <strong>Datos bancarios</strong>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="titular_banco" class=" form-control-label">Nombre del titular</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="titular_banco" name="titular_banco" placeholder="Titular" class="form-control" value="{{$evento->banco->titular_banco ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese el nombre del titular de la cuenta (se mostrara esta informacion en la invitacion)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="cuenta_banco" class=" form-control-label">Cuenta</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="cuenta_banco" name="cuenta_banco" placeholder="XXXX-XXXX-XXXX-XXXX (Banco)" class="form-control" value="{{$evento->banco->cuenta_banco ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese el nombre numero de la cuenta y coloque entre parentesis el nombre del banco al que pertenece la cuenta (se mostrara esta informacion en la invitacion)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="clabe_banco" class=" form-control-label">Cuenta CLABE</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="clabe_banco" name="clabe_banco" placeholder="XXXXXXXXXXXXXXXXXX" class="form-control" value="{{$evento->banco->clabe_banco ?? ''}}" required>
                                        <small class="form-text text-muted">Ingrese el numero de la cuenta CLABE (se mostrara esta informacion en la invitacion)</small>
                                    </div>
                                </div>
                                <div class="row form-group " style=" padding-left: 5px">
                                    <button type="submit" class="btn btn-primary btn-sm"  >
                                        <i class="fa fa-dot-circle-o"></i> Guardar
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Carrusel de fotografias</strong>
                        </div>
                        <div class="col-12 ">
                            <ul>
                                @foreach ($evento->fotos as $foto )
                                    <form action="{{route('foto.destroy',$foto)}}" method='POST'>
                                        @method('DELETE')
                                        @csrf
                                        <li>
                                            <img src="{{Storage::url($foto->ruta_foto)}}" alt="Foto carrousel" style="width: 100%"> <button type="submit"class="btn btn-danger btn-sm" style="margin-top: 20px"><i class="fa fa-ban"></i> Eliminar</button>
                                        </li>
                                    </form>
                                    <br>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card-body card-block">

                            <form action="{{route('foto.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <input type="hidden" name="evento_id" value="{{$evento->id}}">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="Fotografia_carrusel" class=" form-control-label">Fotografia nueva</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="Fotografia_carrusel" name="Fotografia_carrusel" class="form-control-file" required>
                                        <small class="form-text text-muted">Suba fotografias para que sus invitados puedan verlas (se recomienda utilizar la relacion de aspecto 16:9)</small>
                                    </div>
                                </div>
                                <div class="row form-group " style=" padding-left: 5px">
                                    <button type="submit" class="btn btn-primary btn-sm"  >
                                        <i class="fa fa-dot-circle-o"></i> Agregar
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Eliminar evento</strong>
                        </div>

                        <div class="card-footer">
                            <form action="{{route('evento.destroy',$evento)}}" method='POST'>
                                @method('DELETE')
                                @csrf
                                <p>Cuidado esto eliminara el evento completamente.</p>
                                <br>
                                <button type="submit"class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>


