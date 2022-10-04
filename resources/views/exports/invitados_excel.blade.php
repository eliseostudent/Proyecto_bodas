<table>
    <thead>
        <tr>
            <th style="color: #5F9ACF">Nombre del invitado</th>
            <th style="color: #4D7BA4">Boletos</th>
            <th style="color: #4D7BA4">Url</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($invitados as $invitado)
            <tr>
                <td style="color: #000">{{ $invitado->nombre_invitado }}</td>
                <td style="color: #24FF00">{{ $invitado->numero_boletos }}</td>
                <td style="color: #24FF00">https://celi-y-eli.fun/inv/{{ $invitado->hash }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
