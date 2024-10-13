{{-- {{dd($category->slug)}} --}}

<x-layout>
    @vite('resources/css/base.css')
    <div class="max-w-[1400px] m-auto block min-h-screen bg-slate-50">
        <div class="flex justify-center bg-slate-50 h-full">
            <main class="w-full flex flex-col">
                <x-main-nav class="justify-center" :categories="$categories" category="{{$category->slug}}"></x-main-nav>
                <article class="grid grid-cols-1 md:grid-cols-3 max-lg:p-6 lg:ps-8 gap-x-6 gap-y-8 mt-5">
                    @foreach ($posts as $post)
                    <x-card-article :post="$post"></x-card-article>
                    @endforeach
                </article>
            </main>
        </div>
    </div>
</x-layout>