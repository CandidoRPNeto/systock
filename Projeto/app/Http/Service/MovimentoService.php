<?php

namespace App\Http\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movimento;

class MovimentoService extends Controller
{
    public function listarEstoque()
    {
        $pdf = PDF::loadView('Relatorios/relatorio', ['movimentos' => Movimento::all()]);
        return $pdf->download('Movimentação('.date("Y/m/d").').pdf');
    }

    public function movimentarEstoque($usuario,$item,$quantidade)
    {
        $mov = new Movimento();
        $mov->usuario = $usuario;
        $mov->item = $item;
        $mov->quantidade = $quantidade;
        $mov->save();
    }
}
