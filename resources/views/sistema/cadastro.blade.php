<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastre-se</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
    <form action="/cadastrar" method="post">
        @csrf
        <div>        
            <input type="text" name="name" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="email" name="email" placeholder="Digite seu email">
        </div>
        <div>
            <input type="password" name="password" placeholder="Digite sua senha">
        </div>
        <div>
            <button>Cadastrar!</button>
        </div>
    </form>
</body>
</html>         

    