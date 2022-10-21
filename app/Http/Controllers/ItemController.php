<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{

    public function index()
    {
        return view('Itens/index',['itens' => Item::all()]);
    }

    public function create()
    {
        return view('Itens/create');
    }

    public function store(Request $request)
    {
        Item::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Itens/edit',['item' => Item::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Item::where('id', $id)->update([
            'nome' => $request->nome,
            'fabricante' => $request->fabricante,
            'fornecedor' => $request->fornecedor,
            'grupo_item_id' => $request->grupo_item_id,
        ]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::where('id',$id)->delete();
        return redirect('/');
    }
}
