<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\GrupoItem;
use App\Http\Service\MovimentoService;
use App\Models\Gestor;
use App\Models\Usuario;
use App\Models\Movimento;
use PDF;

class ItemController extends Controller
{
    public function list($user_id)
    {
        return view('Itens/list',['itens' => Item::where('ativo','=',0)->get(),'grupos' => GrupoItem::all(),'user_id' => $user_id]);
    }

    public function index($user_id)
    {
        return view('Itens/index',['itens' => Item::all(),'grupos' => GrupoItem::all(),'user_id' => $user_id]);
    }

    public function create()
    {
        return view('Itens/create',['grupos' => GrupoItem::all()]);
    }

    public function store(Request $request)
    {
        if($request->ativo != "disabled" && $request->grupo_item_id != "disabled"){
            Item::create($request->all());
            return redirect('/item');
        }
        else{
            return redirect('/item/create');
        }
    }

    public function show($id, $user_id)
    {
        return view('Itens/show',['item' => Item::findOrFail($id),'grupos' => GrupoItem::all(),'user_id' => $user_id]);
    }

    public function edit($id, $user_id)
    {
        return view('Itens/edit',['item' => Item::findOrFail($id),'grupos' => GrupoItem::all(),'user_id' => $user_id]);
    }

    public function changeQuantidade(Request $request, $id, $user_id)
    {
        Item::where('id', $id)->update([
            'quantidade' => $request->quantidade
        ]);
        $mov = new MovimentoService();
        $user = Usuario::findOrFail($user_id);
        $mov->movimentarEstoque($user->nome,Item::findOrFail($id)->nome,$request->quantidade);
        return back();
    }

    public function update(Request $request, $id, $user_id)
    {
        Item::where('id', $id)->update([
            'nome' => $request->nome,
            'quantidade' => $request->quantidade,
            'fabricante' => $request->fabricante,
            'fornecedor' => $request->fornecedor,
            'grupo_item_id' => $request->grupo_item_id,
            'preco' => $request->preco,
            'ativo' => $request->ativo
        ]);
        $mov = new MovimentoService();
        $user = Gestor::findOrFail($user_id);
        $mov->movimentarEstoque($user->nome,Item::findOrFail($id)->nome,$request->quantidade);
        return back();
    }

    public function destroy($id)
    {
        Item::where('id',$id)->delete();
        return redirect('/item');
    }

    public function emitirRelatorio()
    {
        $pdf = PDF::loadView('Relatorios/relatorio', ['movimentos' => Movimento::all()]);
        return $pdf->download('Movimentação('.date("Y/m/d").').pdf');
    }
}
