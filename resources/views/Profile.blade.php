
<x-layout>
    @vite('resources/css/base.css')

    <div class="max-w-[1400px] m-auto block min-h-screen bg-slate-50">
        <div class="flex justify-evenly bg-slate-50 max-md:p-4 h-full">
            <main class="max-w-[728px] flex flex-col w-full h-max gap-3 md:p-4">
                <h1 class="text-4xl font-bold">{{ $Profiles['name'] }}</h1>
                <div id="nav-profile" class="mt-4">
                    <ul class="flex border-b pb-3 gap-5 text-md font-medium text-gray-600">
                        <li><a href="/profile/" class="text-blue-500">Posts</a></li>
                        <li><a href="/profile/{{ $Profiles['username'] }}/settings" class="">Settings</a></li>
                    </ul>
                </div>
                <div>
                    <article class="grid grid-cols-1 gap-5">
                        @foreach ($Profiles->posts as $post)
                            <x-blog-card--profile :post="$post"></x-blog-card--profile>
                        @endforeach
                    </article>
                </div>
            </main>
            <div id="Aside-Profile"
                class="pt-4 sticky top-0 ps-2 pe-4 h-max w-[303px] lg:flex flex-col shrink-0 md:block hidden">
                <div class="flex flex-col gap-4 flex-wrap">
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="65" class="rounded-3xl">
                    <h1 class="font-medium text-2xl">{{ $Profiles['name'] }}</h1>
                    <p>{{ $Profiles['about'] }}</p>
                </div>
                <div class="space-y-3 text-gray-400">
                    <h3 class="font-semibold text-2xl ">Bio</h3>
                    <p>{{ $Profiles['bio'] ? $Profiles['bio'] : 'No bio yet here' }}</p>
                </div>
            </div>
        </div>
    </div>

</x-layout>