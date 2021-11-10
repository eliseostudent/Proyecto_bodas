<x-app-layout>
    <x-slot name="menu_sidebar">
        @include('layouts.menu_sidebar')
    </x-slot>
    <x-slot name="header_mobile">
        @include('layouts.header_mobile_menu')
    </x-slot>
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Informacion general</strong>: {{$evento->nombre_evento}}
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                        <input type="text" id="nombre_1" name="nombre_1" placeholder="Nombre" class="form-control">
                                        <small class="form-text text-muted">Ingrese el nombre de la novia o novio</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="nombre_2" class=" form-control-label">Nombre</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="nombre_2" name="nombre_2" placeholder="Nombre" class="form-control">
                                        <small class="form-text text-muted">Ingrese el nombre de la novia o novio</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="fecha_evento" class=" form-control-label">Fecha</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="date" id="fecha_evento" name="fecha_evento" class="form-control" >
                                        <small class="help-block form-text">Ingresa la fecha del gran dia</small>
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
                                                    <input type="radio" id="radio1" name="radios" value="Niños" class="form-check-input" style="border:2px solid rgba(0,0,0,0.2);" checked>Niños
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="radio2" class="form-check-label ">
                                                    <input type="radio" id="radio2" name="radios" value="No niños" class="form-check-input" style="border:2px solid rgba(0,0,0,0.2);">No niños
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
                                            <option value="0">White Tie</option>
                                            <option value="1">Black Tie</option>
                                            <option value="2">Formal</option>
                                            <option value="3">Cocktail</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="foto_novios" class=" form-control-label">Foto principal</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="file" id="foto_novios" name="foto_novios" class="form-control-file" accept="image/png, image/jpeg">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="mensaje_principal" class=" form-control-label">Mensaje principal</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="mensaje_principal" id="mensaje_principal" rows="9" placeholder="Nuestra boda" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group " style=" padding-left: 5px">
                                        <button type="submit" class="btn btn-primary btn-sm"  >
                                            <i class="fa fa-dot-circle-o"></i> Guardar
                                        </button>

                                </div>
                            </form>

                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                        <input type="text" id="nombre_ceremonia" name="nombre_ceremonia" placeholder="Nombre" class="form-control">
                                        <small class="form-text text-muted">Ingrese el nombre del lugar donde sera la ceremonia</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="direccion_ceremonia" class=" form-control-label">Direccion del lugar</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="direccion_ceremonia" name="direccion_ceremonia" placeholder="Direccion" class="form-control">
                                        <small class="form-text text-muted">Ingrese la direccion donde sera la ceremonia</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="foto_ceremonia" class=" form-control-label">Foto del lugar</label>
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
                                        <input type="text" id="nombre_salon" name="nombre_salon" placeholder="Nombre" class="form-control">
                                        <small class="form-text text-muted">Ingrese el nombre del lugar donde sera la celebracion</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="direccion_salon" class=" form-control-label">Direccion del lugar</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="direccion_salon" name="direccion_salon" placeholder="Direccion" class="form-control">
                                        <small class="form-text text-muted">Ingrese la direccion donde sera la celebracion</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="foto_salon" class=" form-control-label">Foto del lugar</label>
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
                            <form action="" method="post"  class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col-12 card-header">
                                        <strong>Mesa de regalos</strong>
                                    </div>
                                </div>
                                <ul>
                                    <li>Nombre:enlace <button class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button></li>
                                    <br>
                                    <li>Nombre:enlace <button class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button></li>
                                    <br>
                                    <li>Nombre:enlaces <button class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button></li>
                                    <br>
                                </ul>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="nombre_mesa" class=" form-control-label">Nombre de la mesa</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="nombre_mesa" name="nombre_mesa" placeholder="Nombre" class="form-control">
                                        <small class="form-text text-muted">Ingrese el nombre del provedor (ejemplo: liverpool)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="enlace_mesa" class=" form-control-label">Enlace a mesa</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="enlace_mesa" name="enlace_mesa" placeholder="" class="form-control">
                                        <small class="form-text text-muted">Copie y pegue el enlace a la mesa de regalos generado por el provedor.</small>
                                    </div>
                                </div>

                                <div class="row form-group " style=" padding-left: 5px">
                                    <button type="submit" class="btn btn-primary btn-sm"  >
                                        <i class="fa fa-dot-circle-o"></i> Agregar
                                    </button>

                                </div>
                            </form>
                            <form action="" method="post"  class="form-horizontal">
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
                                        <input type="text" id="titular_banco" name="titular_banco" placeholder="Titular" class="form-control">
                                        <small class="form-text text-muted">Ingrese el nombre del titular de la cuenta (se mostrara esta informacion en la invitacion)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="cuenta_banco" class=" form-control-label">Cuenta</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="cuenta_banco" name="cuenta_banco" placeholder="XXXX-XXXX-XXXX-XXXX" class="form-control">
                                        <small class="form-text text-muted">Ingrese el nombre numero de la cuenta (se mostrara esta informacion en la invitacion)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-4">
                                        <label for="clabe_banco" class=" form-control-label">Cuenta CLABE</label>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <input type="text" id="clabe_banco" name="clabe_banco" placeholder="XXXXXXXXXXXXXXXXXX" class="form-control">
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
                        <div class="card-body card-block">
                            <ul>
                                <li>Fotografia <button class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button></li>
                                <br>
                                <li>Fotografia <button class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button></li>
                                <br>
                                <li>Fotografia <button class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Eliminar</button></li>
                                <br>
                            </ul>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="Fotografia_carrusel" class=" form-control-label">Fotografia nueva</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="Fotografia_carrusel" name="Fotografia_carrusel" class="form-control-file">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Agregar
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</x-app-layout>
