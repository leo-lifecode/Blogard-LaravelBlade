<x-layout>
    @vite('resources/css/base.css')
    <div>
        <h1 class="text-2xl font-semibold">Edit Post</h1>
        <main class="bg-white text-black">
            <form action="/dashboard/posts/{{ $user->slug }}" method="POST" class="w-full"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="-mx-4">

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="name" class="text-xl font-medium">Name</label>
                            <input name="name" id="name" type="text" placeholder="Slug your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2"
                                value="{{ old('name', $user->name) }}" />
                            @error('name')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="username" class="text-xl font-medium">Username</label>
                            <input name="username" id="username" type="text" placeholder="Slug your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2"
                                value="{{ old('username', $user->username) }}" />
                            @error('username')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="email" class="text-xl font-medium">email</label>
                            <input name="email" id="email" type="email" placeholder="title your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2"
                                value="{{ old('email', $user->email) }}" />
                            @error('email')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="password" class="text-xl font-medium">Password</label>
                            <input name="password" id="password" type="password" placeholder="title your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2"
                                value="{{ old('password', $user->password) }}" />
                            @error('password')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="role" class="text-xl font-medium">Role</label>
                            <input name="role" id="role" type="text" placeholder="Slug your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2"
                                value="{{ old('role', $user->role) }}" />
                            @error('role')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <input type="hidden" name="oldImage" value="{{ $user->avatar }}">
                        <img src="{{ asset('storage/' . $user->avatar) }}" class="w-[350px] h-[250px]"
                            id="file-preview">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="image" class="text-xl font-medium">Image</label>
                            <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input id="file-input" name="image" type="file" class="block w-full text-sm text-slate-500
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

                    <div class="w-full px-4">
                        <button type="submit"
                            class="px-4 py-2 bg-stone-700 text-md text-white rounded-xl hover:bg-stone-500 cursor-pointer">Submit</button>
                        <a href="/dashboard/posts" class="no-underline px-4 py-2 bg-stone-700 text-white rounded-xl hover:bg-stone-500
                            cursor-pointer">Cancel
                        </a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</x-layout>