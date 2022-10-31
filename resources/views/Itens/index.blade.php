<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista</h1>
    <a href="/">Logout</a>
    <a href="/group/create">+Group+</a>
    <a href="/item/create">+Item+</a>
    @foreach ($itens as $item)
    {{$item->nome}}
    <form action="/item/delete/{{$item->id}}" method="post">
        @csrf @method('DELETE')
        <button type="submit">-</button>
    </form>
    <a href="/item/edit/{{$item->id}}">></a>
    @endforeach
</body>
</html>
