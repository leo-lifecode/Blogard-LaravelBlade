<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
        <title>Blogard</title>
    </head>

    <body class="min-h-screen d-flex flex-col">
        <x-navbar />
            {{ $slot }}
        <x-footer />
    </body>
</html>
