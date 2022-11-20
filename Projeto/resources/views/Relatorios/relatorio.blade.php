<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div></div>


    <h1 style="color: black;">Movimentações de Estoque</h1>
    <table style="border: solid 3px black">
        <tr>
            <th style="border: solid 2px black">Item</th>
            <th style="border: solid 2px black">Usuario</th>
            <th style="border: solid 2px black">Nova Quantidade</th>
            <th style="border: solid 2px black">Data</th>
          </tr>

        @foreach ($movimentos as $movimento)
        <tr>
            <td class="name" style="border: solid 1px black">{{$movimento->item}}</td>
            <td class="name" style="border: solid 1px black">{{$movimento->usuario}}</td>
            <td class="name" style="border: solid 1px black">{{$movimento->quantidade}}</td>
            <td class="name" style="border: solid 1px black">{{$movimento->created_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
