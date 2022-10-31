<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/gestores/"><-</a>

    <form action="/gestores/update/{{$gestor->id}}" method="post">
        @csrf

        <label>Nome</label>
        <input type="text" name="nome" value='{{$gestor->nome}}' required>
        <label>Email</label>
        <input type="text" name="email" value='{{$gestor->email}}' required>
        <label>Senha</label>
        <input type="text" name="senha" value='{{$gestor->senha}}' required>
        <label>Telefone</label>
        <input type="number" name="telefone" value='{{$gestor->telefone}}' required>
        <label>Endereço</label>
        <input type="text" name="endereco" value='{{$gestor->endereco}}' required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
