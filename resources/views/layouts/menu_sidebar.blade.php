<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('dashboard')}}">
            <img src="{{asset('storage/app-images/logo.png')}}" alt="Proyecto bodas" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="far fa-calendar" ></i>Evento</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li>
                        </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-clipboard-list" ></i>Invitados</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-send" ></i>Enviar invitaciones</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="material-icons">streetview</i>Vista previa</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
