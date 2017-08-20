<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
   protected $fillable = ['user_id', 'quantidade', 'sessao_id'];

   public function filme() {
     return $this->belongsTo('App\Filme');
   }

   public function sessao() {
     return $this->belongsTo('App\Sessao');
   }

}
