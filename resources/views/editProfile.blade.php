<x-layout>
    @vite('resources/css/base.css')
    <div class="max-w-[1400px] m-auto block min-h-screen bg-slate-50">
        <div class="flex justify-evenly bg-slate-50 max-md:p-4 h-full">
            <main class="flex flex-col w-full h-max gap-3 md:p-4">
                <h1 class="text-4xl font-bold">{{ $Profiles['name'] }}</h1>
                <div id="nav-profile" class="my-4">
                    <ul class="flex border-b pb-3 gap-5 text-md font-medium text-gray-600">
                        <li><a href="/profile/{{ $Profiles['username'] }}">Posts</a></li>
                        <li><a href="/profile/{{ $Profiles['username'] }}/settings" class="text-blue-500">Settings</a>
                        </li>
                    </ul>
                </div>
                <form action="/profile/{{ $Profiles->username }}/settings/edit" method="POST" class="w-full"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="-mx-4">

                        <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                            <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                                <label for="name" class="text-xl font-medium">Name</label>
                                <input autocomplete="off" id="name" name="name" type="text"
                                    class="block w-full placeholder-gray-400/70 rounded-lg border border-gray-400 bg-white px-5 py-2.5 text-gray-700 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    placeholder="your name profile" value="{{ old('name', $Profiles->name) }}" />
                                @error('name')
                                <div class="mt-3 text-xs text-red-400"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                            <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                                <label for="username" class="text-xl font-medium">Username</label>
                                <input name="username" id="username" type="text" placeholder="your username"
                                    class="block w-full placeholder-gray-400/70 rounded-lg border border-gray-400 bg-white px-5 py-2.5 text-gray-700 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    value="{{ old('username', $Profiles->username) }}" />
                                @error('username')
                                <div class="mt-3 text-xs text-red-400"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                            <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                                <label for="bio" class="text-xl font-medium">Bio</label>
                                <textarea name="bio" id="bio" type="text" placeholder="your bio"
                                    class="resize-none h-[120px] block w-full placeholder-gray-400/70 rounded-lg border border-gray-400 bg-white px-5 py-2.5 text-gray-700 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    value="{{ old('bio', $Profiles->bio) }}" ></textarea>
                                @error('bio')
                                <div class="mt-3 text-xs text-red-400"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                            <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                                <label for="email" class="text-xl font-medium">email</label>
                                <input name="email" id="email" type="email" placeholder="your email"
                                    class="block  w-full placeholder-gray-400/70 rounded-lg border border-gray-400 bg-white px-5 py-2.5 text-gray-700 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                    value="{{ old('email', $Profiles->email) }}" />
                                @error('email')
                                <div class="mt-3 text-xs text-red-400"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                            <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                                <label for="password" class="text-xl font-medium">Password</label>
                                <input name="password" id="password" type="password" placeholder="your password"
                                    class="block w-full placeholder-gray-400/70 rounded-lg border border-gray-400 bg-white px-5 py-2.5 text-gray-700 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40" />
                                @error('password')
                                <div class="mt-3 text-xs text-red-400"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                            <input type="hidden" name="oldImage" value="{{ $Profiles->avatar }}">
                            <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                                <label for="avatar" class="text-xl font-medium">Avatar</label>
                                <label class="block">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input id="file-input" name="avatar" type="file" class="block w-full text-sm text-slate-500
                                              file:mr-4 file:py-2 file:px-4
                                              file:rounded-full file:border-0
                                              file:text-sm file:font-semibold
                                              file:bg-violet-50 file:text-violet-700
                                              hover:file:bg-violet-100
                                            " />
                                    <img src="{{ asset('storage/' . $Profiles->avatar) }}" class="w-[350px] h-[250px]"
                                        id="file-preview">
                                </label>
                                @error('avatar')
                                <div class="mt-3 text-xs text-red-400"> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full px-4">
                            <button type="submit"
                                class="px-4 py-2 bg-stone-700 text-md text-white rounded-xl hover:bg-stone-500 cursor-pointer">Submit</button>
                            <a href="/profile/{{ $Profiles->username }}/" class="text-md no-underline px-4 py-2 bg-stone-700 text-white rounded-xl hover:bg-stone-500
                                        cursor-pointer">Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <script>
        const input = document.getElementById('file-input');
        const previewPhoto = () => {

        const file = input.files;
        if (file) {
            const fileReader = new FileReader();
            const preview = document.getElementById('file-preview');
            preview.classList.remove('hidden');
        fileReader.onload = function (event) {
                preview.setAttribute('src', event.target.result);
            }
            fileReader.readAsDataURL(file[0]);
        }
    }
    input.addEventListener("change", previewPhoto);
    </script>
</x-layout>