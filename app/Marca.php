<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $guarded = [];
    protected $table = 'marca';

    public function modelo(){
      return $this->hasMany(modelo::class);
    }

    public function productos(){

    return $this->hasMany(Producto::class);

    }

}
