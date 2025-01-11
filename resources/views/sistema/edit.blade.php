<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        .full-height {
            height: 100vh;
        }
    </style>

</head>
<body>
<div class="container d-flex justify-content-center align-items-center full-height">
        <div class="w-50">
        <h1 class="my-4 text-center">Editar Usuário</h1>
        @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function() {
                        window.location.href = '/lista';
                    }, 3000); // Redireciona após 3 segundos
                </script>
            @endif
        <form action="/lista/{{ $user->id }}" method="post" class="row g-3">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="name" class="form-label">Alterar Nome:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Digite o novo nome">
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Alterar Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Digite o novo email">
            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Alterar Senha:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Digite a nova senha">
            </div>
            <div class="col-md-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
</div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>