<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Evento;
use Illuminate\Support\Facades\Gate;
class FotoController extends Controller
{
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
            'Fotografia_carrusel' => 'required|mimes:jpg,jpeg,png'
        ]);
        $ruta=$request->file('Fotografia_carrusel')->store('images');
        $request->merge([
            'ruta_foto'=>$ruta
        ]);
        //Fotografia_carrusel
        $foto=Foto::create($request->except('_token','_method','Fotografia_carrusel'));
        $evento=$foto->evento;
        return redirect()->route('evento.edit',$evento)->with('success','Se agrego una foto nueva al carrousel.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foto  $foto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foto $foto)
    {
        if (! Gate::allows('es_propietario-foto', $foto)) {
            abort(403);
        }
        $evento=$foto->evento;
        Storage::delete($foto->ruta_foto);
        $foto->delete();
        return redirect()->route('evento.edit',$evento)->with('success','Se elimino una foto del carrousel.');
    }
}
