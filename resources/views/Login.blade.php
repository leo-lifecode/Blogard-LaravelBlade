<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/css/base.css')
    <title>Blogard</title>

</head>

<body class="font-sans">

    <div class="w-full bg-slate-50 justify-center items-center flex h-screen flex-col">
        <div class="p-4 m-auto flex items-center flex-col sm:w-[450px] w-full">
            <div class="mb-[40px] uppercase text-2xl font-semibold">
                <h1>Login</h1>
            </div>
            <div class="flex gap-2 mb-[35px] w-full font-semibold text-xl capitalize text-center">
                <div class="flex items-center gap-2 justify-center shadow-xl border border-gray-100 text-black py-4 rounded-lg w-1/2 cursor-pointer hover:shadow-2xl">
                    <img src="{{asset('img/google.png')}}" width="35">
                    <h1>google</h1>
                </div>
                <div class="flex items-center gap-2 justify-center shadow-xl border border-gray-100 bg-black text-white py-4 rounded-lg w-1/2 cursor-pointer hover:shadow-2xl">
                    <img src="{{asset('img/x.png')}}" width="35" class="invert">                    
                    <h1>twitter</h1>
                </div>
            </div>
            <form action="/login" method="POST" class="w-full space-y-4">
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="email" class="text-lg font-semibold">Email address</label>
                    <input value="{{ old('email') }}" name="email" type="email" class="px-2 py-3 rounded-md border border-gray-300 bg-gray-200" placeholder="Enter your email" id="email" aria-describedby="emailHelp">
                    <div class="mb-2 hidden">We'll never share your email with anyone else.</div>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="text-lg font-semibold">Password</label>
                    <input type="password" name="password" class="px-2 py-3 rounded-md border border-gray-300 bg-gray-200" placeholder="Enter your password" id="password">
                </div>
                @session('loginError')
                     <div class="text-red-500 text-[14px]">{{ session('loginError') }}</div>
                @endsession
                <div class="mt-4">
                    <button type="submit" class="text-center w-full bg-slate-900 text-slate-50 py-3 rounded-lg hover:bg-slate-700 duration-150">Login</button>
                </div>
                <div class="text-center mt-[40px] text-slate-400">
                    <p>Don't have an account? <a href="/register" class="underline hover:text-black duration-200">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>