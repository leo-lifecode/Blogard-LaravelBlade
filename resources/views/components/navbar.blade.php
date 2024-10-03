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
                <div id="menu-profile" class="hidden absolute right-0 h-max py-2 px-3 bg-slate-100 shadow-xl text-lg mt-2 w-[130px] rounded-lg">
                    <ul>
                        <li>
                            {{-- <a href="/profile/{{ Auth::user()->username }}">Profile</a> --}}
                        </li>
                        <li class="mt-2 bg-indigo-800 text-white rounded-md">
                            <hr />
                            <a href="">
                                <button class="py-1 px-2">Login</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>