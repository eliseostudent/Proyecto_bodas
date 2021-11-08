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
            {{ __('Gracias por unirte! Antes de comenzar, podrias verificar tu correo electronico dando click en el correo que acabamos de enviar? Si no recibiste el correo, estaremos contentos de enviarte otro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nuevo correo de verificacion ha sido enviado a la direccion de correo registrada.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Reenviar correo de verificacion') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Cerrar sesion') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
