<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestor;

class GestorController extends Controller
{

    public function index()
    {
        return view('Gestores/index',['gestores' => Gestor::all()]);
    }

    public function create()
    {
        return view('Gestores/create');
    }

    public function store(Request $request)
    {
        Gestor::create($request->all());
        return redirect('/gestores');
    }
    
    public function edit($id)
    {
        return view('Gestores/edit',['gestor' => Gestor::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        Gestor::where('id', $id)->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco
        ]);
        return back();
    }
    
    public function destroy($id)
    {
        Gestor::where('id',$id)->delete();
        return redirect('/gestores');
    }
}
