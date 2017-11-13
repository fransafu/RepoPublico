<?php

namespace RepoPublico;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * Funcion para relaciónn entre entidades del modelo
    */
    public function rol(){
        return $this->belongsTo('RepoPublico\Rol');
    }

    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles){
      if (is_array($roles)) {
          return $this->hasAnyRole($roles) || 
                 abort(401, 'Esta accion esta desautorizada.');
      }
      return $this->hasRole($roles) || 
             abort(401, 'Esta accion esta desautorizada.');
    }

    /**
    * Verificar multiples roles. Obtiene los roles disponibles.
    *
    * @param array $roles
    */
    public function hasAnyRole($roles){
        return null !== $this->rol()->whereIn('titulo', $roles)->first();
    }

    /**
    * Verificar un rol
    * @param string $role
    */
    public function hasRole($role){
        dd($role);
        return null !== $this->rol()->where('titulo', $role)->first();
    }
}
