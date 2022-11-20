<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestor;
use App\Models\Empresa;
use App\Models\Usuario;

class PessoaController extends Controller
{
    public function index()
    {
        return view('Login/login');
    }

    public function create()
    {
        return view('Login/register');
    }

    public function item(Request $request)
    {
        $user = Gestor::where('email',$request->email)->first();
        if (!is_null($user)){
            if ($user->senha == $request->senha)
                return redirect('/item/'.$user->id);
        }
        $user = Empresa::where('email',$request->email)->first();
        if (!is_null($user)){
            if ($user->senha == $request->senha)
                return redirect('/gestor/');
        }
        $user = Usuario::where('email',$request->email)->first();
        if (!is_null($user)){
            if ($user->senha == $request->senha)
                return redirect('/item/list/'.$user->id);
        }
        return redirect('/');
    }

    public function store(Request $request)
    {
        $user = Usuario::where('email',$request->email)->first();
        if (is_null($user)){
            Usuario::create($request->all());
            return redirect('/item/list');
        }
        return redirect('/register');
    }
}
