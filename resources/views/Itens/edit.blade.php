<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/"><-</a>

    <form action="/update/{{$item->id}}" method="post">
        @csrf

        <label>Nome</label>
        <input type="text" name="nome" value="{{$item->nome}}" required>
        <label>Fabricante</label>
        <input type="text" name="fabricante" value="{{$item->fabricante}}" required>
        <label>Fornecedor</label>
        <input type="text" name="fornecedor" value="{{$item->fornecedor}}" required>
        <label>Grupo de Item</label>
        <select required name="grupo_item_id" >
            <option value="0">NONE</option>
            {{-- @foreach ( as )
            <option value=""></option>
            @endforeach --}}
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
