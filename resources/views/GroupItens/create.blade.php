<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systock</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/Input/input.css")}}">
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
            <a href="/item/">Voltar</a>
            <a href="/">Desonectar</a>
        </div>
    </div>
    <div class="body">
        <h1>Criar um Grupo</h1>
        <form action="/group/store" method="post">
            @csrf
            <input type="text" name="nome" class="input-text" placeholder="Nome" required>
            <div class="left-b">
                <button type="submit">Cadastrar</button>
            </div>
        </form>

        <h1>Grupos</h1>
        <table class="tabela">
            @foreach ($grupos as $grupo)
            <tr class="item-lista">
                <td class="name">{{$grupo->nome}}</td>
                <form action="/group/delete/{{$grupo->id}}" method="post">
                    <td class="left-b"> 
                            @csrf @method('DELETE')
                            <button type="submit">Deletar</button>
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
