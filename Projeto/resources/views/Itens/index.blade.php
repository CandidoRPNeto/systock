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
        <h1>Itens</h1>
        <div class="create-b">
            <a href="/item/relatorio" >Gerar Relatorio</a>
            <a href="/group/create">Grupos</a>
            <a href="/item/create" >Criar Item</a>
        </div>
        <table class="tabela">
            <tr class="item-lista">
                <td>Nome</td>
                <td>Preço</td>
                <td>Quantidade</td>
                <td>Grupo</td>
                <td>Ativo</td>
                <td class="space"></td>
            </tr>
            @foreach ($itens as $item)
            <tr class="item-lista">
                <td class="name">{{$item->nome}}</td>
                <td class="name">{{$item->preco}}</td>
                <td class="name">{{$item->quantidade}}</td>
                @foreach ($grupos as $grupo)
                @if($grupo->id === $item->grupo_item_id)
                <td class="name">{{$grupo->nome}}</td>
                @else
                <td class="name">None</td>
                @endif
                @endforeach
                @if($item->ativo === 0)
                <td class="name">True</td>
                @else
                <td class="name">False</td>
                @endif
                <form action="/item/delete/{{$item->id}}" method="post">
                    <td class="left-b">
                            @csrf @method('DELETE')
                            <button type="submit">Deletar</button>
                            <a href="/item/edit/{{$item->id}}/{{$user_id}}">Modificar</a>
                    </td>
                </form>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
