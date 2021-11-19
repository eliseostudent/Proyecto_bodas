<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Lugar;
use App\Models\Banco;
use App\Models\Invitado;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos=Auth::user()->eventos;
        return view('dashboard',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dentro de index se encuentra la vista de crear
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'evento_id_nombre' => 'required',//aqui el evento_id representa el nombre del evento para no hacer un formulario mas
            'contraseña_del_evento'=> 'required|max:40|min:8'

        ]);
        $request->merge([
            'nombre_evento'=>$request->evento_id_nombre
        ]);
        $evento=Evento::create($request->all());
        $evento->users()->attach(Auth::id());
        Lugar::create(['evento_id' => $evento->id]);
        Banco::create(['evento_id' => $evento->id]);

        return redirect()->route('evento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //aqui vamos a mostrar la vista previa
        Auth::user()->setEventoActual($evento);
        $evento->load('lugar');
        $evento->load('mesas');
        $evento->load('fotos');
        return view('evento/eventoShow',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        Auth::user()->setEventoActual($evento);
        $evento->load('lugar');
        $evento->load('mesas');
        $evento->load('fotos');
        return view('evento/eventoEdit',compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        Auth::user()->setEventoActual($evento);

        if($request->foto_novios!=null){
            $request->validate([
                'nombre_1' => 'required|max:64',
                'nombre_2'=> 'required|max:64',
                'foto_novios'=>'required|mimes:jpg,jpeg,png',
                'mensaje_principal'=>'required'

            ]);
            Storage::delete($evento->ruta_foto_novios);
            $ruta=$request->file('foto_novios')->store('images');
            $request->merge([
                'ruta_foto_novios'=>$ruta
            ]);
        }else{
            $request->validate([
                'nombre_1' => 'required|max:64',
                'nombre_2'=> 'required|max:64',
                'mensaje_principal'=>'required'

            ]);
        }

        Evento::where('id',$evento->id)->update($request->except('_token','_method','foto_novios'));
        return redirect()->route('evento.edit',$evento)->with('success','Los cambios se han guaradado');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('evento.index');
    }

    /**
     * Une a un usuario a un evento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function unir(Request $request)
    {
        //Aqui se unira un usuario a un evento a travez del identificador y su contraseña
        $request->validate([
            'evento_id_nombre' => 'required',
            'contraseña_del_evento'=> 'required|max:40|min:8'
        ]);
        $evento=Evento::where('id',$request->evento_id_nombre)->where('contraseña_del_evento',$request->contraseña_del_evento)->first();
        if($evento !=null){
            $eventos=Auth::user()->eventos;
            $flag=true;
            foreach ($eventos as $e){
                if($e->id==$evento->id)//este evento ya pertenece al usuario
                {
                    $flag=false;
                    break;
                }
            }
            if($flag){
                $evento->users()->attach(Auth::id());
            }

        }
        return redirect()->route('evento.index');
    }
    /**
     * Muestra la invitacion de un evento segun su invitado.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function invitacion(Evento $evento, Invitado $invitado)
    {
        if($invitado->evento==$evento){
            $evento->load('lugar');
            $evento->load('mesas');
            $evento->load('fotos');
            return view('vista_invitacion',compact('evento','invitado'));
        }
        return view('vista_no_invitado');
    }


}
