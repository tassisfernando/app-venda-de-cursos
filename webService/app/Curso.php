<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'autor',
        'valor',
        'valor_texto',
        'imagem'
    ];

    public function aulas(){
        return $this->hasMany('App\Aula')->orderBy('ordem');
    }
}
