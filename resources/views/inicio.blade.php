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
                    <h3>Aqui se listaran tus proyectos</h3>
                    <br>
                    <ul>
                        <li><a href="#">proyecto  1</a></li>
                        <li><a href="#">proyecto  2</a></li>
                        <li><a href="#">proyecto  3</a></li>
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
                        <form id="EventForm" name="EventForm"  method="get" >
                            @csrf

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="id_evento" name="id_evento" placeholder="Id evento o nombre del evento a crear" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" id="password_evento" name="password_evento" placeholder="Contraseña del evento" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fas fa-key"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="btn btn-secondary btn-sm"  onclick= "document.EventForm.action = '{{route('evento')}}';
                                document.EventForm.submit()">Unirse</button>
                                <button type="submit" class="btn btn-secondary btn-sm" onclick= "document.EventForm.action = '{{route('raiz')}}';
                                document.EventForm.submit()">Crear</button>
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

