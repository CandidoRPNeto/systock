<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoItem;

class GrupoItemController extends Controller
{
    public function create()
    {
        return view('GroupItens/create',['grupos' => GrupoItem::all()]);
    }

    public function store(Request $request)
    {
        GrupoItem::create($request->all());
        return redirect('/group/create');
    }
    
    public function destroy($id)
    {
        GrupoItem::where('id',$id)->delete();
        return redirect('/group/create');
    }
}
