<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BancoController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banco $banco)
    {
        Auth::user()->setEventoActual($banco->evento_id);
        $request->validate([
            'titular_banco' => 'required',
            'cuenta_banco'=> 'required',
            'clabe_banco'=>'required'

        ]);
        Banco::where('id',$banco->id)->update($request->except('_token','_method'));
        return redirect()->route('evento.edit',$banco->evento)->with('success','Los cambios se han guaradado');
    }
}
