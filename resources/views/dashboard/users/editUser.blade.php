@extends('layout.layoutDashboard')

@section('content')
@vite('resources/css/base.css')

<div class="flex justify-center bg-white min-h-max p-4 mt-[20px] rounded-xl">
    <div class="w-full h-max text-black flex-wrap flex flex-col gap-4">
        <h1 class="text-2xl font-semibold">Edit User</h1>
        <main class="bg-white text-black">
            <form action="/dashboard/users/{{ $user->id }}" method="POST" class="w-full" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="-mx-4">
                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="email" class="text-xl font-medium">email</label>
                            <input name="email" id="email" type="text" placeholder="your email"
                                class="w-full bg-transparent border border-slate-400 rounded-md py-[15px] px-2"
                                value="{{ old('email', $user->email) }}" />
                            @error('email')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="username" class="text-xl font-medium">Username</label>
                            <input name="username" id="username" type="text" placeholder="your name"
                                class="w-full bg-transparent border border-slate-400 rounded-md py-[15px] px-2"
                                value="{{ old('username', $user->username) }}" />
                            @error('username')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <input type="hidden" name="oldImage" value="{{ $user->avatar }}">
                        <img src="{{ asset('storage/' . $user->avatar) }}" class="w-[350px] h-[250px]"
                            id="file-preview">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="image" class="text-xl font-medium">Avatar</label>
                            <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input id="file-input" name="avatar" type="file" class="block w-full text-sm text-slate-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                " />
                            </label>
                            @error('avatar')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="is_admin" class="text-xl font-medium">
                                Role
                            </label>
                            <div class="relative z-20 w-full">
                                <select name="is_admin" id="is_admin"
                                    class="border border-slate-400 relative z-20 w-full rounded-lg bg-transparent py-[15px] px-2">
                                    <option value="1" {{ old('is_admin', $user->is_admin) == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="0" {{ old('is_admin', $user->is_admin) == 0 ? 'selected' : '' }}>User</option>
                                </select>
                                <span
                                    class="absolute right-4 top-1/2 z-10 mt-[-2px] h-[12px] w-[12px] -translate-y-1/2 rotate-45 border-r-2 border-b-2">
                                </span>
                            </div>
                            @error('is_admin')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <button type="submit"
                            class="px-4 py-2 bg-stone-700 text-md text-white rounded-xl hover:bg-stone-500 cursor-pointer text-[14px] font-semibold">Submit</button>
                        <a href="/dashboard/users" class="no-underline px-4 py-2 bg-stone-700 text-white rounded-xl hover:bg-stone-500 font-semibold text-[14px]
                            cursor-pointer">Cancel
                        </a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>
@endsection