<?php

$sluguser = $post['slug'];
$idslug = $post['id'];
$title = Str::limit($post['title'], 45);
$image = $post['image'];
$datePost = $post['created_at']->diffForHumans();

?>


<a href="/post/{{ $sluguser }}">
    <div class="space-y-2 w-full flex items-center">
        <div class="font-semibold w-full me-5 p-2">
            <h1 class="max-md:text-xl md:text-2xl">
                {{ $title }}
            </h1>
            <p class="mt-2 text-slate-400 lg:text-lg">{{ $datePost }}</p>
        </div>
        <div class="min-w-[130px] max-w-[160px]  flex items-center rounded-xl">
            <img class="rounded-xl shadow-xl min-w-[130px] max-w-[160px]" src={{ asset('storage/' . $image) }} />
        </div>
    </div>
</a>