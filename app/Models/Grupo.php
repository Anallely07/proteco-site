<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupo';
    protected $primaryKey = 'grupo_id';

    public function lugar(){
        return $this->hasOne('App\Models\Lugar','lugar_id','lugar_id');
    }
    public function curso(){
        return $this->belongsTo('App\Models\Curso','curso_id','curso_id');
    }
}
