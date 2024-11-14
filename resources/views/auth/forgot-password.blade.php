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
    @vite('resources/css/app.css')
    @vite('resources/css/base.css')
    <link rel="shortcut icon" href={{ asset('img/bro.png') }} type="image/x-icon">
    <title>Blogard Community</title>
</head>
<main id="content" role="main" class="w-full flex flex-col h-screen bg-gradient-to-b from-[#063970] to-blue-200">

    <div class="mt-7 bg-white  rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 max-w-md mx-auto p-6">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Forgot password?</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Remember your password?
                    <a class="text-blue-600 decoration-2 hover:underline font-medium" href="/login">
                        Login here
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="grid gap-y-4">
                        <div>
                            <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Email
                                address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email"
                                    class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm">
                            </div>
                            @if(session('status'))
                                 <p class="text-xs text-green-600 mt-2">{{ session('status') }}</p>
                            @else
                            <p class="text-xs text-red-600 mt-2">Please include a valid email
                                address so we can get back to you</p>
                            @endif
                        </div>
                        <button type="submit"
                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Reset
                            password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

</html>