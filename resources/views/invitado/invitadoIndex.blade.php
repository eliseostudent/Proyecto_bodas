<x-app-layout>

    <x-slot name="estilos">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    </x-slot>
    <x-slot name="tablescript">
        <script> $(document).ready(function() { $('.index_table_invitados').DataTable(); });</script>
    </x-slot>
    <x-slot name="header_mobile">
        @include('layouts.header_mobile_menu')
    </x-slot>
    <x-slot name="menu_sidebar">
        @include('layouts.menu_sidebar')
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
            @include('invitado.invitadoCreate')

            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Lista de invitados</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-right">
                            <a href="{{ route('exportar_invitados', $evento) }}"><button
                                    class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="fas fa-file-excel"></i>Exportar</button>
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2 index_table_invitados">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Boletos</th>
                                    <th>Confirmacion</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invitados as $invitado)
                                    <tr class="tr-shadow">
                                        <td>{{ $invitado->nombre_invitado }}</td>
                                        <td>
                                            <span class="block-email">{{ $invitado->correo_invitado }}</span>
                                        </td>
                                        <td class="desc">{{ $invitado->numero_boletos }}</td>
                                        <td>
                                            @if ($invitado->confirmacion == '0')
                                                <span class="status--process">Asistire</span>
                                            @elseif ($invitado->confirmacion == '1')
                                                <span class="status--denied">No asistire</span>
                                            @else
                                                Por confirmar
                                            @endif

                                        </td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item"
                                                    onclick="copyurl('https://celi-y-eli.fun/inv/{{ $invitado->hash }}')">
                                                    <i class="zmdi zmdi-copy"></i>
                                                </button>
                                                <a href="{{ route('enviar_invitacion', [$invitado->evento, $invitado]) }}"
                                                    style="margin-right: 5px"><button class="item"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Enviar invitacion">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button></a>
                                                <form action="{{ route('invitado.destroy', $invitado) }}"
                                                    method='POST'>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="item" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Eliminar">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                    <br>
                    <div class="table-data__tool">
                        <div class="table-data__tool-right">
                            <a href="{{ route('enviar_invitaciones', $evento) }}"><button class="btn btn-primary ">
                                    <i class="fa fa-send"></i> Enviar todos</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
