<div class="relative flex w-full justify-center">
    <div
        class="flex w-full items-center justify-between sm:gap-10 gap-5 bg-primary px-3 py-6 md:px-[20px] lg:px-[100px]">
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
        <div class="flex flex-shrink-0 gap-2 sm:gap-5 justify-center items-center">
            <div>
                <a href="/writeblog">
                    <div
                        class="flex items-center gap-2 bg-blue-100 hover:bg-blue-300 text-blue-400 hover:text-white py-2 px-1 sm:px-4 rounded-xl">
                        <img src="{{asset('img/edit.png')}}" width="25" alt="">
                        <div class="font-semibold">New Post</div>
                    </div>
                </a>
            </div>
            <div class="relative cursor-pointer hover:shadow-lg rounded-full" id="container-profile">
                @auth
                <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar ) : 'https://cdn-icons-png.flaticon.com/512/149/149071.png'}}"
                    width="40" height="40" class="cursor-pointer rounded-full">
                @else
                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="35">
                @endauth
                <div id="menu-profile"
                    class="hidden z-[9999] absolute right-0 h-max py-2 px-3 bg-slate-100 shadow-xl text-lg mt-2 w-[240px] rounded-lg overflow-y-auto">
                    <ul>
                        <li class="flex gap-2 hover:bg-slate-200 rounded-md">
                            @if (Auth::check())
                            <a href="/profile/{{ auth()->user()->username }}" class="w-full flex gap-2 p-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_14_13)">
                                        <path
                                            d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                            stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14C15.0609 15 16.0783 15.4214 16.8284 16.1716C17.5786 16.9217 18 17.9391 18 19V21"
                                            stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_14_13">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                Profile</a>
                            @else
                            <a href="/login" class="w-full flex gap-2 p-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_14_13)">
                                        <path
                                            d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                            stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14C15.0609 15 16.0783 15.4214 16.8284 16.1716C17.5786 16.9217 18 17.9391 18 19V21"
                                            stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_14_13">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                Profile</a>
                            @endif
                        </li>
                        <li class="flex gap-2 hover:bg-slate-200 rounded-md">
                            @if (Auth::check())
                            <a href="/dashboard" class="w-full flex gap-2 p-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_14_53)">
                                        <path
                                            d="M9 4H5C4.44772 4 4 4.44772 4 5V9C4 9.55228 4.44772 10 5 10H9C9.55228 10 10 9.55228 10 9V5C10 4.44772 9.55228 4 9 4Z"
                                            stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9 14H5C4.44772 14 4 14.4477 4 15V19C4 19.5523 4.44772 20 5 20H9C9.55228 20 10 19.5523 10 19V15C10 14.4477 9.55228 14 9 14Z"
                                            stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M19 14H15C14.4477 14 14 14.4477 14 15V19C14 19.5523 14.4477 20 15 20H19C19.5523 20 20 19.5523 20 19V15C20 14.4477 19.5523 14 19 14Z"
                                            stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M14 7H20" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M17 4V10" stroke="#0C4284" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_14_53">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Dashboard</a>
                            @endif
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