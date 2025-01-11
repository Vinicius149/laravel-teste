@php
    use Illuminate\Support\Facades\Auth;
@endphp
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1>Bem vindo!</h1>
    <h2>Selecione uma opção</h2>
    <div>
        <a href="/lista" class="btn btn-primary">Listar usuários</a>
        <a href="/sistema" class="btn btn-primary">Cadastrar usuário</a>
</div>
</body>

</html>