<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Bienvenido al proyecto bodas</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h2>Aqui se listaran tus proyectos</h2>
                    <br>
                    <ul>
                        @foreach ($eventos as $evento )
                            <li>
                                <a href={{route('evento.show',$evento->id)}}>
                                    {{$evento->id}} : {{$evento->nombre_evento}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">Unirse o crear un evento
                        <br>
                        <small>Al crear se tomara la contraseña escrita.</small>
                    </div>
                    <div class="card-body card-block">
                        <form id="EventForm" name="EventForm"  method="POST" >
                            @csrf

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="evento_id_nombre" name="evento_id_nombre" placeholder="Id evento o nombre del evento a crear" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" id="contraseña_del_evento" name="contraseña_del_evento" placeholder="Contraseña del evento" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fas fa-key"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-secondary btn-sm"  onclick= "document.EventForm.action = '{{route('evento.index')}}';
                                document.EventForm.submit()">Unirse</button>
                                <button type="submit" class="btn btn-secondary btn-sm" onclick= "document.EventForm.action = '{{route('unir-evento')}}';
                                document.EventForm.submit()">Crear</button>
                                 @if ($errors->any())
                                 <div class="alert alert-danger">
                                     <ul>
                                         @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li>
                                         @endforeach
                                     </ul>
                                 </div>
                             @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 ">
                <div class="copyright">
                    <p>Copyright © 2021 Proyecto bodas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

