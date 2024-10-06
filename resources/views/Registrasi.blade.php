<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css'])
    <title>Blogard Community</title>
</head>

<body class="font-sans">

    <div class="w-full bg-slate-50 justify-center items-center flex min-h-screen max-h-full flex-col">
        <div class="p-4 m-auto flex items-center flex-col sm:w-[450px] w-full">
            <div class="mb-[20px] uppercase text-2xl font-semibold">
                <h1>SIGN UP</h1>
            </div>
            <div class="flex gap-2 mb-[15px] w-full font-semibold text-xl capitalize text-center">
                <div class="flex items-center gap-2 justify-center shadow-xl border border-gray-100 text-black py-4 rounded-lg w-1/2 cursor-pointer hover:shadow-2xl">
                    <img src="{{ asset('img/google.png') }}" width="35">
                    <h1>google</h1>
                </div>
                <div class="flex items-center gap-2 justify-center shadow-xl border border-gray-100 bg-black text-white py-4 rounded-lg w-1/2 cursor-pointer hover:shadow-2xl">
                    <img src="{{ asset('img/x.png') }}" width="35" class="invert">
                    <h1>twitter</h1>
                </div>
            </div>

            <form action="/register" method="POST" class="w-full">
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-lg font-semibold">Name</label>
                    <input required type="text" name="name" class="px-2 py-3 rounded-md border @error('name') border-red-500 @enderror bg-gray-200" placeholder="Enter your name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="error text-red-500 text-[12px]">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label for="username" class="text-lg font-semibold">Username</label>
                    <input required type="text" name="username" class="px-2 py-3 rounded-md border @error('username') border-red-500 @enderror bg-gray-200" placeholder="Enter your username" id="username" value="{{ old('username') }}">
                    @error('username')
                        <div class="error text-red-500 text-[12px]">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label for="email" class="text-lg font-semibold">Email address</label>
                    <input required type="email" name="email" class="px-2 py-3 rounded-md border bg-gray-200 @error('email') border-red-500 @enderror" placeholder="Enter your email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="error text-red-500 text-[12px]">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-lg font-semibold">Password</label>
                    <input required type="password" name="password" class="px-2 py-3 rounded-md border @error('password') border-red-500 @enderror bg-gray-200" placeholder="Enter your password" id="password">
                    @error('password')
                        <div class="error text-red-500 text-[12px]">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-5">
                    <button type="submit" class="text-center w-full bg-slate-900 text-slate-50 py-3 rounded-lg hover:bg-slate-700 duration-150">Sign Up</button>
                </div>
                
                <div class="text-center mt-[20px] text-slate-400">
                    <p>Already have an account? <a href="/login" class="underline hover:text-black duration-200">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
