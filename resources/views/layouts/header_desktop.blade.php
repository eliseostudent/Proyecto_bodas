<header class="header-desktop  d-none d-sm-none d-md-none d-lg-block .d-xl-block" style="left:0px">
    <div class="section__content">
        <div class="container-fluid">
            <div class="header-wrap ">
                <div  style="width:300px; background:none;left:0;">
                    <a href="{{route('dashboard')}}">
                        <img src="{{asset('app-images/mobile-logo.png')}}" alt="Proyecto bodas" />
                    </a>
                </div>

                <div class="header-button ">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image" >
                                <img class="rounded-full h-10 w-10 object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>

                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="{{route('dashboard')}}">
                                            <img class="rounded-full h-10 w-10 object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="{{route('dashboard')}}">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email}}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" >
                                            <i class="zmdi zmdi-account"></i>Perfil</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
