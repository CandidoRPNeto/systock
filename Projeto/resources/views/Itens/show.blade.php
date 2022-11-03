<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systock</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/Input/input.css")}}">
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
            <a href="/item/list">Voltar</a>
            <a href="/">Desonectar</a>
        </div>
    </div>
    <div class="body">
        <label class="atributo"><h1>{{$item->nome}}</h1></label>
        <label class="atributo">Fabricante: {{$item->fabricante}}</label>
        <label class="atributo">Fornecedor: {{$item->fornecedor}}</label>
        @foreach ($grupos as $grupo)
            @if($grupo->id === $item->grupo_item_id)
            <label class="atributo">Grupo de Item: {{$grupo->nome}}</label>
            @else
            <label class="atributo">Grupo de Item: None</label>
            @endif
        @endforeach
        <label class="atributo">Preço: {{$item->preco}}</label>
        <form action="/item/list/update/{{$item->id}}" method="post">
            @csrf
            <label class="atributo">Quantidade: <input type="number" name="quantidade" class="input-text label-input" value='{{$item->quantidade}}'></label>
            
            <div class="left-b">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
