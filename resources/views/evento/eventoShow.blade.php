<x-app-layout>
    <x-slot name="menu_sidebar">
        @include('layouts.menu_sidebar')
    </x-slot>
    <h2>Aqui ira la infomracion de tu evento</h2>
    <ul>
        <li>Nombre del evento: {{$evento->nombre_evento}}</li>
        <li>Contraseña de acceso al evento: {{$evento->contraseña_del_evento}}</li>
        <li>Identificador del evento: {{$evento->id}}</li>
    </ul>
</x-app-layout>
