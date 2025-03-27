<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('info.title') }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            min-width: 300px;
        }
        .lang-switch {
            margin-bottom: 20px;
        }
        .lang-switch a {
            margin: 0 10px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }
        .lang-switch a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Selector de idioma -->
        <div class="lang-switch">
            @include('_partials.lang')
        </div>

        <!-- Mensaje de bienvenida -->
        <h1>{{ $info }}</h1>

        <!-- Información adicional traducida -->
        <p>{{ $description }}</p>
    </div>
</body>
</html>
