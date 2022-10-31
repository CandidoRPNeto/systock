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

    <form action="/gestores/store" method="post">
        @csrf

        <label>Nome</label>
        <input type="text" name="nome" required>
        <label>Email</label>
        <input type="text" name="email" required>
        <label>Senha</label>
        <input type="text" name="senha" required>
        <label>Telefone</label>
        <input type="number" name="telefone" required>
        <label>Endereco</label>
        <input type="text" name="endereco" required>
        <label>CPF</label>
        <input type="number" name="cpf" required>
        <label>Codigo</label>
        <input type="number" name="codigo" required>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
