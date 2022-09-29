<?php

namespace App\Providers;

use App\Models\Evento;
use App\Models\Foto;
use App\Models\Invitado;
use App\Models\Lugar;
use App\Models\Mesa;
use App\Models\User;
use App\Policies\EventoPolicy;
use App\Policies\InvitadoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Evento::class => EventoPolicy::class,
        Invitado::class => InvitadoPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('es_propietario-evento', [EventoPolicy::class, 'es_propietario']);
        Gate::define('es_propietario-invitado', [InvitadoPolicy::class, 'es_propietario']);
        Gate::define('es_propietario-foto', function (User $user, Foto $foto) {
            $evento=$foto->evento;
            $usuarios=$evento->users;
            foreach ($usuarios as $u){
                if($user->id==$u->id){
                    return true;
                }
            }
            return false;
        });
        Gate::define('es_propietario-mesa', function (User $user, Mesa $mesa) {
            $evento=$mesa->evento;
            $usuarios=$evento->users;
            foreach ($usuarios as $u){
                if($user->id==$u->id){
                    return true;
                }
            }
            return false;
        });
        Gate::define('es_propietario-lugar', function (User $user, Lugar $lugar) {
            $evento=$lugar->evento;
            $usuarios=$evento->users;
            foreach ($usuarios as $u){
                if($user->id==$u->id){
                    return true;
                }
            }
            return false;
        });
        //
    }
}
