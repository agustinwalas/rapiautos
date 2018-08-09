<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $guarded = [];
    protected $table = 'modelo';

    public function marcaM(){
      return $this->belongsTo(marca::class);
    }





}
