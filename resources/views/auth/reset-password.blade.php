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

@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<!-- Display Errors if Any -->
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
        <div class="flex items-center space-x-2 mb-6">
            <h1 class="text-xl font-semibold">Change Password</h1>
        </div>
        <form class="space-y-6" action="{{ route('password.update') }}" method="POST">
            @csrf
            <div>
                <input type="text" name="token" value="{{ $token }}"
                    class="form-input block w-full border border-gray-300 rounded-md shadow-sm">
                @error('token')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email" class="text-sm font-medium text-gray-700 block mb-2">Email</label>
                <input type="email" id="email" name="email" value="{{ request()->email }}"
                    class="form-input block w-full border border-gray-300 rounded-md shadow-sm">
                @error('email')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="text-sm font-medium text-gray-700 block mb-2">New Password</label>
                <input type="password" id="password" name="password"
                    class="password-input form-input block border w-full border-gray-300 rounded-md shadow-sm">
                @error('password')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="confirmedPassword" class="text-sm font-medium text-gray-700 block mb-2">New Password</label>
                <input type="password" id="confirmedPassword" name="password_confirmation"
                    class="password-input form-input block border w-full border-gray-300 rounded-md shadow-sm">
                @error('password_confirmation')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div id="passwordCriteria" class="text-sm space-y-2">
                @if(session('status'))
                <p class="text-red-500">{{ session('status') }}</p>
                @endif
            </div>
            <button type="submit"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">Apply
                Changes</button>
        </form>
    </div>


</div>

</html>