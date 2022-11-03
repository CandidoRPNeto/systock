<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome','email','senha','telefone','endereco','cpf','codigo'];

    public function usuario(){
        return $this->morphMany('App/Usuario','usable');
    }
}
