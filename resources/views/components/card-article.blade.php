<div class="space-y-2 w-full max-md:flex md:block max-md:justify-between max-md:items-center">
    <a href="post/{{ $post['slug'] }}">
        <div class="max-md:w-[130px] max-md:h-full md:w-full max-md:order-2 max-md:flex max-md:items-center">
            <img class="rounded-xl shadow-xl" class="w-[130px]" src={{ $post['image'] }} />
        </div>
    </a>
    <div class="font-semibold text-sm max-md:order-1">
        <h1 class="max-md:text-2xl">
            <a href="post/{{ $post['slug'] }}"> {{ $post['title'] }}</a>
        </h1>
        <p class="mt-2 text-slate-400">{{ $post['created_at']->format('F j Y') }}</p>
    </div>
</div>