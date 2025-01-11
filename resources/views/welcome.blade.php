@php
use Illuminate\Support\Facades\Auth;
@endphp
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo!</title>
</head>
<body>
@auth
        <h1>Bem vindo!</h1>

        <p>Olá, {{ Auth::user()->name }}</p>
        <a href="/sair">Sair</a>
 
@endauth



<h2>Área do usuário cadastrado</h2>

</body>
</html>
