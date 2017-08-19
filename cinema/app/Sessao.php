<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    protected $fillable = ['filme_id','dublado','legendado','data','hora','local'
                          ,'preco'];
                          
    public function filme() {
      return $this->belongsTo('App\Filme');
    }
}
