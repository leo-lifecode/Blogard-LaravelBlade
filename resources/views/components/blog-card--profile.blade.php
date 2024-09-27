<div class="space-y-2 w-full flex items-center">
    <div class="font-semibold text-2xl w-full me-5">
        <h1 class="max-md:text-2xl">
            {{ $post['title'] }}
        </h1>
        <p class="mt-2 text-slate-400">{{ $post['created_at']->format('F j Y') }}</p>
    </div>
    <div class="min-w-[130px] max-w-[160px] h-full flex items-center">
        <img class="rounded-xl shadow-xl" class="min-w-[130px] max-w-[160px]"
            src="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
    </div>
</div>