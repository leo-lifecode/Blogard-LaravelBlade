<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href={{asset('style/style.css')}}>
    @vite('resources/css/app.css')
    @vite('resources/css/base.css')
    <link rel="shortcut icon" href={{ asset('img/bro.png') }} type="image/x-icon">
    <title>Blogard Community</title>
</head>

<body>
    <div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden py-6 sm:py-12 bg-white">
        <div class="max-w-xl px-5 text-center">
            <h2 class="mb-2 text-[42px] font-bold text-zinc-800">Check your inbox</h2>
            <p class="mb-2 text-lg text-zinc-500">We are glad, that you’re with us ? We’ve sent you a verification link
                to the email address you provided</p>
                @auth
                <a href="/"
                    class="mt-3 inline-block w-96 rounded bg-indigo-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">Open
                    the App →</a>
                @else
                    <a href="/login"
                        class="mt-3 inline-block w-96 rounded bg-indigo-600 px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">Open
                        the App →</a>
                @endauth
        </div>
    </div>
</body>

</html>