<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>

<body>
    <h1>Lista de Usuários</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <div>
            @foreach ($users as $user)
                <tr>
                    <div>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                    </div>
                    <div>
                    <form action="/users/{{ $user->id }}/edit" method="get" style="display:inline;">
                        @csrf
                        <button type="submit">Editar</button>
                    </form>
                    <form action="/lista/{{ $user->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja apagar o usuário?')">Excluir</button>
                        </div>
                    </form>               
                    </tr>
            @endforeach
            </div>
        </tbody>
    </table>
</body>

</html>