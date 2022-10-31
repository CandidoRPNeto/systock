<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/item"><-</a>

    <form action="/item/update/{{$item->id}}" method="post">
        @csrf
        <label>Nome</label>
        <input type="text" name="nome" value='{{$item->nome}}' required>
        <label>Fabricante</label>
        <input type="text" name="fabricante" value='{{$item->fabricante}}' required>
        <label>Fornecedor</label>
        <input type="text" name="fornecedor" value='{{$item->fornecedor}}' required>
        <label>Grupo de Item</label>
        <select required name="grupo_item_id" >
            <option value="0">None</option>
            @foreach ($grupos as $grupo)
            @if ({{$grupo->id}} === {{$item->grupo_item_id}})
            <option value="{{$grupo->id}}" selected>{{$grupo->nome}}</option>
            @else
            <option value="{{$grupo->id}}">{{$grupo->nome}}</option>
            @endif
            @endforeach
        </select>
        <label>Quantidade</label>
        <input type="number" name="quantidade" value='{{$item->quantidade}}' required>
        <label>Preco</label>
        <input type="number" name="preco" value='{{$item->preco}}' required>
        <label>Ativo</label>
        <select required name="ativo" >
            @if ({{$item->ativo}} === 0)
            <option value="0" selected>True</option>    
            <option value="1">False</option>
            @else
            <option value="0">True</option>  
            <option value="1" selected>False</option>
            @endif
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
