<?php

namespace App\Http\Controllers;
use App\Models\Mesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return redirect()->route('evento.edit',$evento);
    }
    public function destroy(Mesa $mesa)
    {
        $evento=$mesa->evento;
        $mesa->delete();
        return redirect()->route('evento.edit',$evento);
    }

}
