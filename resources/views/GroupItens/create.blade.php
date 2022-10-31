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

    <form action="/group/store" method="post">
        @csrf

        <label>Nome</label>
        <input type="text" name="nome" required>
        <button type="submit">Enviar</button>
    </form>

    <h1>Grupos</h1>
    @foreach ($grupos as $grupo)
    {{$grupo->nome}}
    <form action="/group/delete/{{$grupo->id}}" method="post">
        @csrf @method('DELETE')
        <button type="submit">-</button>
    </form>
    @endforeach
</body>
</html>
