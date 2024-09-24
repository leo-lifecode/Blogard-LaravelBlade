<div
    class="space-y-2 w-full max-md:flex md:block max-md:justify-between max-md:items-center"
>
    <a href='/post/{{ $post['slug'] }}'>
        <div
            class="max-md:w-[130px] max-md:h-full md:w-full max-md:order-2 max-md:flex max-md:items-center"
        >
            <img
                class="rounded-xl shadow-xl"
                src="https://images.unsplash.com/photo-1566679056462-2075774c8c07"
            />
        </div>
        <div class="font-semibold text-sm max-md:order-1">
            <h1 class="max-md:text-2xl">
                {{ $post['title'] }}
            </h1>
            <p class="mt-2 text-slate-400">Jan 27</p>
        </div>
    </a>
</div>
