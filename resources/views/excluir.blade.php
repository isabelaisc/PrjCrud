<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>

    <!-- Styles -->
    @vite([
        'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
    <div class="card">
            <div class="card-body">
                <div class="container-lg">
                    <h4 class="card-title"> Cadastrar - Agendamento de Potenciais Clientes </h4>
                    <p class="card-text"> Sistema utilizado para agendamento de serviços </p>
                    <form class="row g-3" method="POST" id="form" action="/excluir/{{ $agendamento->id }}" nome="form">
                        @csrf
                        @method('DELETE')                  
    <!-- Botão Excluir -->
    <button class="btn btn-primary" type="submit">Excluir</button>
</form>
</body>
</html>