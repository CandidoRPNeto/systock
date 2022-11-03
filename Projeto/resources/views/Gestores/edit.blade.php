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
            <a href="/gestores/">Voltar</a>
            <a href="/">Desonectar</a>
        </div>
    </div>
    <div class="body">
        <form action="/gestores/update/{{$gestor->id}}" method="post">
            @csrf
            <input type="text" name="nome" class="input-text" value="{{$gestor->nome}}" placeholder="Nome" required>
            <input type="email" name="email" class="input-text" value="{{$gestor->email}}" placeholder="E-mail" required>
            <input type="password" name="senha" class="input-text" value="{{$gestor->senha}}" placeholder="Senha" required>
            <input type="number" name="telefone" class="input-text" value="{{$gestor->telefone}}" placeholder="Telefone" required>
            <input type="text" name="endereco" class="input-text" value="{{$gestor->endereco}}" placeholder="Endereço" required>
            <div class="left-b">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
