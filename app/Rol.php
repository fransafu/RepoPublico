<?php

namespace RepoPublico;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public function Users(){
    	return $this->hasMany('RepoPublico\User');
    }
}
