<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--font awesome-->
        <script src="https://kit.fontawesome.com/2bffb21f29.js" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- meu estilo-->
        <link rel="stylesheet" href=" {{asset('css/style.css')}}">

        <title> Super Gestão - @yield('titulo') </title>
    </head>
    <body >
        @include('app.layouts._partials.topo')
        @yield('conteudo')

    </body>
</html>