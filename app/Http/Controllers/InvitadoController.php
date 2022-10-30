<?php

namespace App\Http\Controllers;

use App\Mail\invitacionMail;
use App\Models\Evento;
use App\Models\Invitado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class InvitadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Evento $evento)
    {
        if (!Gate::allows('es_propietario-evento', $evento)) {
            abort(403);
        }
        Auth::user()->setEventoActual($evento);
        $invitados = $evento->invitados;
        return view('invitado/invitadoIndex', compact('invitados', 'evento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Auth::user()->setEventoActual($request->evento_id);
        $request->validate([
            'nombre_invitado' => 'required',
            'correo_invitado' => 'email',
            'numero_boletos' => 'required|integer'

        ]);
        $request->merge([
            'hash' => str_replace('/', '', Hash::make($request->nombre_invitado . random_int(0, 100)))
        ]);

        $invitado = Invitado::create($request->all());
        $evento = $invitado->evento;
        return redirect()->route('index_invitados', $evento)->with('success', 'Se creo el usuario correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function show(Invitado $invitado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitado $invitado)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitado $invitado)
    {
        $request->validate([
            'confirmacion' => 'required'

        ]);
        $invitado->confirmacion = $request->confirmacion;
        $invitado->save();
        return redirect()->back()->with('success', 'Se ha enviado la confirmacion.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitado  $invitado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitado $invitado)
    {
        if (!Gate::allows('es_propietario-invitado', $invitado)) {
            abort(403);
        }
        $evento = $invitado->evento;
        $invitado->delete();
        return redirect()->route('index_invitados', $evento)->with('success', 'Se elimino el usuario correctamente.');
    }
    public function enviarInvitacion(Evento $evento, Invitado $invitado)
    {
        if (!Gate::allows('es_propietario-invitado', $invitado)) {
            abort(403);
        }
        mail::to($invitado->correo_invitado)->send(new invitacionMail($evento, $invitado));
        return redirect()->back()->with('success', 'Se han enviado el correo correctamente.');
    }
    public function confirm(Request $request, Invitado $invitado)
    {
        $request->validate([
            'confirmacion' => 'required'

        ]);
        $invitado->confirmacion = $request->confirmacion;
        $invitado->save();
        return redirect()->back()->with('success', 'Se ha enviado la confirmacion.');
    }
}
