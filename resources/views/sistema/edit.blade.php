<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>

<body>
    <h1>Editar Usuário</h1>
    <div>
            <form action="/lista/{{ $user->id }}" method="post">           
            @csrf
            @method('PUT')
            <div>
                <label for="name">Alterar Nome:</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}">
            </div>
            <div>
                <label for="email">Alterar Email:</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}">
            </div>
            <div>
                <label for="password">Alterar Senha:</label>
                <input type="password" name="password" id="password" value="">
                <div>
                    <button type="submit">Salvar</button>
                </div>
            </div>
    </div>
</body>

</html>