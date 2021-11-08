<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        /**
         * Validar datos
         * Crear instancia del modelo
         * Asignar propiedades del modelo (columnas)
         * redireccionar a index
         */
        $request->validate([
            'evento_id_nombre' => 'required',//aqui el evento_id representa el nombre del evento para no hacer un formulario mas
            'contraseña_del_evento'=> 'required|max:40|min:8'

        ]);
        $request->merge([
            'nombre_evento'=>$request->evento_id_nombre
        ]);
        $evento=Evento::create($request->all());
        $evento->users()->attach(Auth::id());
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
    public function unirEvento(Request $request)
    {
        //Aqui se unira un usuario a un evento a travez del identificador y su contraseña
        $request->validate([
            'evento_id_nombre' => 'required',//aqui el evento_id representa el nombre del evento para no hacer un formulario mas
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
}
