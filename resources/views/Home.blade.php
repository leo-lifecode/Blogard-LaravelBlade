<x-layout>
    <div class="max-w-[1400px] m-auto block min-h-screen bg-slate-50">
        <div class="flex justify-evenly bg-slate-50 h-full">
            <main class="max-w-[728px] flex flex-col">
                <x-main-nav></x-main-nav>
                <article class="mb-10 grid grid-cols-1 md:grid-cols-3 max-lg:p-6 lg:ps-8 gap-x-6 gap-y-8 mt-5">
                    @foreach ($posts as $post)
                    <x-card-article :post="$post"></x-card-article>
                    @endforeach
                </article>
                {{ $posts->links() }}
            </main>
            <x-aside></x-aside>
        </div>
    </div>
</x-layout>