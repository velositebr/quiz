<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Velosite - seu site fácil">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->


    <!-- Custom styles for this template -->
    <link href="css/frontend/custom-css.css" rel="stylesheet">
    <link href="css/frontend/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
        @yield('content')

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; <?php echo date('Y'); ?> Hominem Clinic Bauru</p>
            <p class="mb-1"><a href="https://www.velosite.com.br" title="Criação de sites por Velosite">Criação de sites por Velosite</a></p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="js/frontend/form-validation.js"></script>
    </div>
    </body>
</html>
