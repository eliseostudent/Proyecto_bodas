<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LugarController extends Controller
{


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lugar  $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
        Auth::user()->setEventoActual($lugar->evento_id);
        $request->validate([
            'nombre_ceremonia' => 'required',
            'direccion_ceremonia'=> 'required',
            'foto_ceremonia'=>'mimes:jpg,jpeg,png',
            'nombre_salon' => 'required',
            'direccion_salon'=> 'required',
            'fecha_salon'=> 'required',
            'fecha_ceremonia'=> 'required',
            'foto_salon'=>'mimes:jpg,jpeg,png'

        ]);
        if($request->foto_ceremonia!=null){//se selecciono una nueva foto de ceremonia
            Storage::delete($lugar->ruta_foto_ceremonia);
            $ruta=$request->file('foto_ceremonia')->store('images');
            $request->merge([
                'ruta_foto_ceremonia'=>$ruta
            ]);
        }
        if($request->foto_salon!=null){//se selecciono una nueva foto de ceremonia
            Storage::delete($lugar->ruta_foto_salon);
            $ruta=$request->file('foto_salon')->store('images');
            $request->merge([
                'ruta_foto_salon'=>$ruta
            ]);
        }
        Lugar::where('id',$lugar->id)->update($request->except('_token','_method','foto_salon','foto_ceremonia'));
        return redirect()->route('evento.edit',$lugar->evento)->with('success','Los cambios se han guaradado');
    }


}
