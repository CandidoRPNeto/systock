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
            <a href="/register">Registrar-se</a>
        </div>
    </div>
    <div class="body">
        <form action="/item/inside" method="post">
            @csrf
            <input type="email" name="email" class="input-text" placeholder="Email" required>
            <input type="password" name="senha" class="input-text" placeholder="Senha" required>
            <div class="left-b">
                <button type="submit">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>
