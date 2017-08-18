<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proximo extends Model
{
    protected $fillable = ['filme_id'];

    public function filme() {
      return $this->belongsTo('App\Filme');
    }
}
