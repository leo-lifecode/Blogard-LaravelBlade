<div class="flex gap-2 h-[65px]">
    <div class="w-[85px] h-[65px] flex flex-shrink-0">
        <img class="rounded-lg w-[85px] h-[65px]" src={{ asset('storage/' . $post->image) }}>
    </div>
    <div class="font-medium grid grid-cols-1 content-between capitalize">
        <div class="text-sm">{{ $post->title }}</div>
        <div class="text-sm text-slate-400"> {{ $post->created_at }} </div>
    </div>
</div>