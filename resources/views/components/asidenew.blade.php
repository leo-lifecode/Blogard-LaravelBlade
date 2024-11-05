
<aside class="ps-2 pe-4 h-max md:max-w-[368px] hidden lg:flex flex-col shrink-0 sticky top-0">
    <div class="flex justify-between py-5">
        <h1 class="font-semibold text-2xl">Recent Posts</h1>
    </div>
    <article class="mt-2 space-y-6">
        @foreach ($recentPosts as $post)
            <x-aside-card :post="$post"></x-aside-card>
        @endforeach
    </article>
    <div class="mt-[20px]">
        <div>
            <h1 class="font-semibold text-2xl">Recommended Topics</h1>
        </div>
        <div class="flex flex-wrap gap-2 mt-4">
            @foreach ($categories as $category)
                <a href={{ "/category/" . $category->slug }} >
                  <div class="px-2 py-2 w-max rounded bg-gray-300 rounded-full">{{ $category->name }}</div>
                </a>
            @endforeach
        </div>
    </div>
</aside>