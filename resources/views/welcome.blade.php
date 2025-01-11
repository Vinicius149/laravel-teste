<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo!</title>
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
        <div class="text-center">
            <h1 class="mb-4">Bem vindo!</h1>
            <div class="d-flex flex-column">
                <a href="/sistema" class="btn btn-secondary btn-lg mb-2">Cadastrar usuário</a>
                <a href="/lista" class="btn btn-primary btn-lg mb-2">Listar usuários</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>