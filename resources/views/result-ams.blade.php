<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Velosite - seu site fácil">
    <title>Resultado <?php echo $totalScore; ?> - Questionário AMS</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->


    <!-- Custom styles for this template -->
    <link href="css/frontend/custom-css.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="pt-5 pb-3 text-center">
            <img class="d-block mx-auto mb-4" src="images/frontend/layout/logo-hominem.png">
            <h2>Questionário AMS</h2>
            <p class="lead">
                Obrigado por participar do nosso questionário de autoteste gratuito.
                A pontuação desse teste é frequentemente usada por médicos no diagnóstico
                da deficiência de testosterona e no monitoramento do tratamento.
                O resultado do seu teste pessoal está abaixo:
            </p>
            <p class="lead">
                <strong>{{ $name }}, seu resultado é {{ $totalScore }}!</strong>
                <br/>
                <strong class="{{ $color }}" style="padding: 3px 10px; color: white;">{{ $risco }}!</strong>
            </p>
        </div>
        <div class="row">
            <div class="progress" style="height: 30px;">
                <div class="progress-bar bg-green" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100">
                    @if($level == 'muito-baixo')
                        <strong>{{ $totalScore }}</strong>
                    @endif
                </div>
                <div class="progress-bar bg-dark-green" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100">
                    @if($level == 'baixo')
                        <strong>{{ $totalScore }}</strong>
                    @endif
                </div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 49%" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                    @if($level == 'moderado')
                        <strong>{{ $totalScore }}</strong>
                    @endif
                </div>
                <div class="progress-bar bg-red" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    @if($level == 'grave')
                        <strong>{{ $totalScore }}</strong>
                    @endif
                </div>
            </div>
        </div>
        <div class="row m-5">
            @if($level == 'grave')
                Risco grave
            @elseif($level == 'moderado')
            Risco moderado
            @elseif($level == 'baixo')
            Risco baixo
            @elseif($level == 'muito-baixo')
            Risco muito baixo
            @endif
            <a class="mt-5 btn btn-primary btn-lg btn-block" href="/ams">Refazer o questionário</a>
        </div>
    </div>
</body>

</html>
