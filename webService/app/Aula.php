<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{

    protected $fillable = [
        'titulo',
        'ordem',
        'tempo', 
        'video'
    ];

    public function curso(){
        return $this->belongsTo('App\Curso');
    }
}
