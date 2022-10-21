<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    use HasFactory;

    public function usuario(){
        return $this->morphMany('App/Usuario','usable');
    }
}
