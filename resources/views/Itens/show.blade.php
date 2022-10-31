<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/item/list"><-</a>
    <label>Nome:</label>
    {{$item->nome}}
    <label>Fabricante:</label>
    {{$item->fabricante}}
    <label>Fornecedor:</label>
    {{$item->fornecedor}}
    <label>Grupo de Item:</label>
    {{$item->grupo_item_id}}
    <label>Preco:</label>
    {{$item->preco}}
        
    <form action="/item/list/update/{{$item->id}}" method="post">
        @csrf
        <label>Quantidade</label>
        <input type="number" name="quantidade" value="{{$item->quantidade}}" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
