<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/create">+</a>
    @foreach ($itens as $item)
    {{$item->nome}}
    <form action="/delete/{{$item->id}}" method="post">
        @csrf @method('DELETE')
        <button type="submit">-</button>
    </form>
    <a href="/edit/{{$item->id}}">></a>
    @endforeach
</body>
</html>
