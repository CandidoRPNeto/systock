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
            <a href="/item/">Voltar</a>
            <a href="/">Desonectar</a>
        </div>
    </div>
    <div class="body">
        <form action="/item/update/{{$item->id}}/{{$user_id}}" method="post">
            @csrf
            <input type="text" name="nome" class="input-text" placeholder="Nome" value='{{$item->nome}}' required>
            <input type="text" name="fabricante" class="input-text" placeholder="Fabricante" value='{{$item->fabricante}}' required>
            <input type="text" name="fornecedor" class="input-text" placeholder="Fornecedor" value='{{$item->fornecedor}}' required>

            <div class="input-small">
                <select required name="grupo_item_id" class="select">
                    <option value="0">None</option>
                    @foreach ($grupos as $grupo)
                        @if($grupo->id === $item->grupo_item_id)
                        <option value="{{$grupo->id}}" selected >{{$grupo->nome}}</option>
                        @else
                        <option value="{{$grupo->id}}">{{$grupo->nome}}</option>
                        @endif
                    @endforeach
                </select>
                <select required name="ativo" class="select">
                    @if ($item->ativo === 0)
                    <option value="0" selected>True</option>
                    <option value="1">False</option>
                    @else
                    <option value="0">True</option>
                    <option value="1" selected>False</option>
                    @endif
                </select>
            </div>
            <input type="number" name="quantidade" class="input-text" placeholder="Quantidade" value='{{$item->quantidade}}' required>
            <input type="number" name="preco" class="input-text" placeholder="Preço" value='{{$item->preco}}' required>
            <div class="left-b">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
