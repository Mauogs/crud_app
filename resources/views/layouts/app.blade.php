<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Simples Para Aplicação CRUD no Laravel 12 - AllPHPTricks.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h3 class=" mt-3">Tutorial Simples Para Aplicação CRUD no Laravel 12 - <a href="https://www.allphptricks.com/">AllPHPTricks.com</a></h3>
        @yield('content')
        <div class="row justify-content-center text-center mt-3">
            <div class="col-md-12">
                <p>Voltar ao Tutorial:
                    <a href="https://www.allphptricks.com/simple-laravel-12-crud-application-tutorial/"><strong>Link do Tutorial</strong></a>
                </p>
                <p>
                    Para Mais Tutoriais de Desenvolvimento Web Visite: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>