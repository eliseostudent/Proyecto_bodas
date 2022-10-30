<table>
    <thead>
        <tr>
            <th style="color: #5F9ACF">Nombre del invitado</th>
            <th style="color: #4D7BA4">Boletos</th>
            <th style="color: #4D7BA4">Confirmacion</th>
            <th style="color: #4D7BA4">Url</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($invitados as $invitado)
            <tr>
                <td style="color: #000">{{ $invitado->nombre_invitado }}</td>
                <td style="color: #0040ff">{{ $invitado->numero_boletos }}</td>
                @if ($invitado->confirmacion == '0')
                    <td style="color: #24FF00">Asistire</td>
                @elseif ($invitado->confirmacion == '1')
                    <td style="color: #ff0000">No asistire</td>
                @else
                    <td style="color: #000">Por confirmar</td>
                @endif
                <td style="color: #0073ff">https://celi-y-eli.fun/inv/{{ $invitado->hash }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
