<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systock</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/List/list.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="title">
            <h2>Systock</h2>   
        </div>
        <div class="left-b">
            <a href="/">Desonectar</a>
        </div>
    </div>

    <div class="body">
        <h1>Gestores</h1>
        <div class="create-b">
            <a href="/gestores/create">Cadastrar Gestor</a>
        </div>
        <table class="tabela">
            <tr class="item-lista">
                <td>Nome</td>
                <td>E-mail</td>
                <td>Telefone</td>
                <td>Código</td>
                <td class="space"></td>
            </tr>
            @foreach ($gestores as $gestor)
            <tr class="item-lista">
                <td class="name">{{$gestor->nome}}</td>
                <td class="name">{{$gestor->email}}</td>
                <td class="name">{{$gestor->telefone}}</td>
                <td class="name">{{$gestor->codigo}}</td>
                <form action="/gestores/delete/{{$gestor->id}}" method="post">
                    <td class="left-b"> 
                            @csrf @method('DELETE')
                            <button type="submit">Deletar</button>
                            <a href="/gestores/edit/{{$gestor->id}}">Modificar</a>
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
