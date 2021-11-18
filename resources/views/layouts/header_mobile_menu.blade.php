<header class="header-mobile d-block d-lg-none"style="background:#f5f5f5; box-shadow: 0px 2px 5px 0px rgb(0 0 0 / 10%);z-index: 3;">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="{{route('dashboard')}}">
                    <img src="{{asset('storage/app-images/mobile-logo.png')}}" alt="Proyecto bodas" width="250"  />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <div class="info clearfix">
                            <div class="image">
                                    <img class="rounded-full h-10 w-10 object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    {{ Auth::user()->name }}
                                </h5>
                                <h5 class="name">{{ Auth::user()->email}}</h5>
                            </div>
                        </div></a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                    <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" >
                                        <i class="zmdi zmdi-account"></i>Perfil</a>
                            </li>
                            <li>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        <i class="zmdi zmdi-power"></i>
                                        {{ __('Cerrar sesion') }}
                                    </x-jet-responsive-nav-link>
                                </form>
                            </li>
                        </ul>
                </li>
                <li>
                    <a  href={{route('evento.edit', Auth::user()->getEventoActual())}}>
                        <i class="far fa-calendar" ></i>Evento</a>
                </li>
                <li >
                    <a  href={{route('index_invitados',Auth::user()->getEventoActual())}}>
                        <i class="fas fa-clipboard-list" ></i>invitados</a>
                </li>
                <li >
                    <a  href="#">
                        <i class="fa fa-send" ></i>enviar invitaciones</a>
                </li>
                <li >
                    <a  href={{route('evento.show',Auth::user()->getEventoActual())}}>
                        <i class="material-icons">streetview</i>vista previa</a>
                </li>


            </ul>
        </div>
    </nav>
</header>
