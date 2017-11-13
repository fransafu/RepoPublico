<?php

namespace RepoPublico;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
		/**
		*	Relacion entre entidades
		*/
    public function users(){
    	return $this->hasMany('RepoPublico\Users');
    }
}
