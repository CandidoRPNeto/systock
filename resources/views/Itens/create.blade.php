<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/item/"><-</a>

    <form action="/item/store" method="post">
        @csrf
        <label>Nome</label>
        <input type="text" name="nome" required>
        <label>Fabricante</label>
        <input type="text" name="fabricante" required>
        <label>Fornecedor</label>
        <input type="text" name="fornecedor" required>
        <label>Grupo de Item</label>
        <select required name="grupo_item_id" >
            <option value="0">None</option>
            @foreach ($grupos as $grupo)
            <option value="{{$grupo->id}}">{{$grupo->nome}}</option>
            @endforeach
        </select>
        <label>Quantidade</label>
        <input type="number" name="quantidade" required>
        <label>Preco</label>
        <input type="number" name="preco" required>
        <label>Ativo</label>
        <select required name="ativo" >
            <option value="0">True</option>
            <option value="1">False</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
