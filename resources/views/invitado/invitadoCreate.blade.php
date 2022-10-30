<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong>Agregar invitado</strong>
            </div>
            <div class="card-body card-block">

                <form action="{{ route('invitado.store') }}" method="post" class="form-horizontal">
                    @csrf
                    <input type="hidden" name="evento_id" value="{{ $evento->id }}">
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <label for="nombre_invitado" class=" form-control-label">Nombre del invitado</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="text" id="nombre_invitado" name="nombre_invitado" placeholder="Fam. Perez"
                                class="form-control" required>
                            <small class="form-text text-muted">Ingrese el nombre del invitado o familia</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <label for="correo_invitado" class=" form-control-label">Correo del invitado</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="email" id="correo_invitado" name="correo_invitado"
                                placeholder="perez@familia.com" class="form-control" value="noemail@test.com">
                            <small class="form-text text-muted">Ingrese una direccion de correo a donde sera enviada la
                                invitacion</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-4">
                            <label for="numero_boletos" class=" form-control-label">Numero de boletos</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="number" id="numero_boletos" name="numero_boletos" value="1"
                                class="form-control" required min="1">
                            <small class="form-text text-muted">Ingrese el numero de boletos para esta
                                invitacion</small>
                        </div>
                    </div>
                    <div class="row form-group " style=" padding-left: 5px">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Agregar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
