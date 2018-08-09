<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";
    protected $guarded = [];
    public $timestamps = false;

    public function marca(){

      return $this->belongsTo(marca::class);
    }

    public function modelo(){

      return $this->belongsTo(modelo::class);
    }

}
