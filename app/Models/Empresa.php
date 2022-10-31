<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['nome','email','senha','telefone','endereco','tipo','cnpj'];

    public function pessoa(){
        return $this->morphMany('App/Pessoa','pessoable');
    }
}
