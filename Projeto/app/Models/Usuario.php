<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome','email','senha','telefone','endereco','tipo','cpf'];

    public function pessoa(){
        return $this->morphMany('App/Pessoa','pessoable');
    }

    public function userble(){
        return $this->morphTo();
    }
}
