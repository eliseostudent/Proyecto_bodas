<?php

namespace App\Http\Controllers;
use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MesaController extends Controller
{
    public function store(Request $request)
    {
        Auth::user()->setEventoActual($request->evento_id);
        $request->validate([
            'nombre_mesa' => 'required',
            'enlace_mesa'=> 'required'

        ]);

        $mesa=Mesa::create($request->all());
        $evento=$mesa->evento;
        return redirect()->route('evento.edit',$evento)->with('success','Se ha agregado la mesa de regalos.');
    }
    public function destroy(Mesa $mesa)
    {
        if (! Gate::allows('es_propietario-mesa', $mesa)) {
            abort(403);
        }
        $evento=$mesa->evento;
        $mesa->delete();
        return redirect()->route('evento.edit',$evento)->with('success','Se ha eliminado una mesa de regalos.');
    }

}
