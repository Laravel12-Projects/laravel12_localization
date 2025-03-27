<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Improved</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                body {
                    font-family: 'Instrument Sans', sans-serif;
                    background-color: #f8fafc;
                    color: #333;
                    line-height: 1.6;
                }
                h1 {
                    font-size: 2.5rem;
                    color: #1a202c;
                    margin-bottom: 1.5rem;
                    text-align: center;
                }
                .container {
                    max-width: 960px;
                    margin: 0 auto;
                    padding: 2rem;
                }
            </style>
        @endif
    </head>
    <body class="flex items-center justify-center min-h-screen flex-col">
        @include('_partials.lang')
        <div class="container">
            <h2>{{ __('info.hello') }}</h2>
        </div>
    </body>
</html>
</html>
