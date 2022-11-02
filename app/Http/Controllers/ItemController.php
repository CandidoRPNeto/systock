<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\GrupoItem;

class ItemController extends Controller
{
    public function list()
    {
        return view('Itens/list',['itens' => Item::where('ativo','=',0)->get(),'grupos' => GrupoItem::all()]);
    }

    public function index()
    {
        return view('Itens/index',['itens' => Item::all(),'grupos' => GrupoItem::all()]);
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

    public function show($id)
    {
        return view('Itens/show',['item' => Item::findOrFail($id),'grupos' => GrupoItem::all()]);
    }
    
    public function edit($id)
    {
        return view('Itens/edit',['item' => Item::findOrFail($id),'grupos' => GrupoItem::all()]);
    }

    public function changeQuantidade(Request $request, $id)
    {
        Item::where('id', $id)->update([
            'quantidade' => $request->quantidade
        ]);
        return back();
    }

    public function update(Request $request, $id)
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
        return back();
    }
    
    public function destroy($id)
    {
        Item::where('id',$id)->delete();
        return redirect('/item');
    }
}
