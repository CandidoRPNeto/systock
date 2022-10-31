<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">Logout</a>
    <a href="/gestores/create">+</a>
    @foreach ($gestores as $gestor)
    {{$gestor->nome}}
    <form action="/gestores/delete/{{$gestor->id}}" method="post">
        @csrf @method('DELETE')
        <button type="submit">-</button>
    </form>
    <a href="/gestores/edit/{{$gestor->id}}">></a>
    @endforeach
</body>
</html>
