<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/register">Register</a>

    <form action="/item/inside" method="post">
        @csrf
        <label>Email</label>
        <input type="text" name="email" required>
        <label>Senha</label>
        <input type="text" name="senha" required>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
