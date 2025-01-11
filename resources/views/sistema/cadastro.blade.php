<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

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
            <h1 class="text-center mb-4">Cadastre-se</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function () {
                        window.location.href = '/';
                    }, 3000);
                </script>
            @endif
            <form action="/cadastrar" method="post" class="row g-3">
                @csrf
                <div class="col-md-12">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Digite seu nome">
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Digite sua senha">
                </div>
                <div class="col-md-12 mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
            <a href="/" class="btn btn-secondary mb-4">Voltar</a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>