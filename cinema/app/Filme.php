<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $fillable = ['nome','genero','duracao','sinopse','elenco'
                          ,'diretor','classificacao''capa','trailer'];
}
