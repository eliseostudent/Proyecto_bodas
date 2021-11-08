<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <div  style="width:300px; background:none;left:0;">
                <a href="{{route('raiz')}}">
                    <img src="{{asset('storage/app-images/mobile-logo.png')}}" alt="Proyecto bodas" />
                </a>
            </div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esta es un area de seguridad de la aplicacion. Por favor confirma tu contraseña antes de continuar.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirmar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
