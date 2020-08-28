<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alterar Cadastro de Usuário</title>
</head>
<body>
    <form action="{{ route('users.edit', ['user' => $user->id] ) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome do Usuário</label>
    <input type="text" name="name" value="{{ $user-> name }}"> <br><br>

        <label for="">E-mail</label>
        <input type="email" name="email" value=" {{ $user-> email }}"><br><br>

        <label for="">Senha</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Editar Usuário">
    </form>

</body>
</html>
