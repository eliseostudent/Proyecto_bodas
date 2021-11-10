<aside class="menu-sidebar d-none d-lg-block">

    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li style="padding-top: 50px"></li>
                <li >
                    <a  href={{route('evento.show',Auth::user()->getEventoActual())}}>
                        <i class="far fa-calendar" ></i>Evento</a>
                </li>
                <li >
                    <a  href="#">
                        <i class="fas fa-clipboard-list" ></i>Invitados</a>
                </li>
                <li >
                    <a  href="#">
                        <i class="fa fa-send" ></i>Enviar invitaciones</a>
                </li>
                <li >
                    <a  href={{route('vista_previa',Auth::user()->getEventoActual())}}>
                        <i class="material-icons">streetview</i>Vista previa</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
