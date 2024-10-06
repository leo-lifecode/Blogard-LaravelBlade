
    <div class="relative flex w-full justify-center">
    <div class="flex w-full items-center justify-between gap-10 bg-primary px-3 py-6 md:px-[20px] lg:px-[100px]">
        <ul class="flex flex-shrink-0 items-center gap-10">
            <a href="/">
                <div class="text-2xl cursor-pointer font-bold text-blue-300 sm:text-2xl md:text-3xl">
                    Blog<span class="text-blue-800">ard</span>
                </div>
            </a>
        </ul>
        <div class="hidden w-full sm:block">
            <form>
                <div class="flex">
                    <div class="relative flex w-full items-center">
                        <div class="absolute m-auto flex h-full w-[40px] items-center justify-center">
                            <img src="{{asset('img/loupe.png')}}" class="z-10 ms-3" />
                        </div>
                        <input type="text" placeholder="Search Blog" name="search"
                            class="w-full rounded-2xl border border-gray-600 py-[12px] ps-12 pe-[100px]" />
                        <button type="submit"
                            class="hover:bg-blue-800 duration-200 absolute right-0 ms-2 rounded-r-lg bg-blue-500 py-[12px] px-5 border border-blue-600 text-white">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="flex flex-shrink-0 gap-5 justify-center items-center">
            <div>
                <a href="" rel="noopener noreferrer">
                    <div
                        class="flex items-center gap-2 bg-blue-50 hover:bg-blue-300 text-blue-400 hover:text-white py-2 px-4 rounded-xl">
                        <img src="{{asset('img/edit.png')}}" width="25" alt="">
                        <div class="font-semibold">New Post</div>
                    </div>
                </a>
            </div>
            <div class="relative cursor-pointer hover:shadow-lg rounded-full" id="container-profile">
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="35">
                <div id="menu-profile"
                    class="hidden z-[9999] absolute right-0 h-max py-2 px-3 bg-slate-100 shadow-xl text-lg mt-2 w-[240px] rounded-lg overflow-y-auto">
                    <ul>
                        <li class="flex gap-2 hover:bg-slate-200 rounded-md p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" aria-label="Profile"><circle cx="12" cy="7" r="4.5" stroke="currentColor"></circle><path stroke="currentColor" stroke-linecap="round" d="M3.5 21.5v-4.342C3.5 15.414 7.306 14 12 14s8.5 1.414 8.5 3.158V21.5"></path></svg>
                            <a href="/profile/{{ auth()->user()->username }}" class="w-full">Profile</a>
                        </li>
                        <li>
                            <div class="border-b border-slate-300 mt-2"></div>
                        </li>
                        @auth
                            <form action="/logout" method="POST">
                                @csrf
                                <li class="mt-2 text-white rounded-md bg-black hover:bg-slate-900 w-max">
                                    <hr />
                                    <button class="py-1 px-3 ">Logout</button>
                                </li>
                            </form>  
                        @else
                            <a href="/login">
                                <li class="mt-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 w-max">
                                    <hr />
                                    <button class="py-1 px-3">Login</button>
                                </li>
                            </a>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>