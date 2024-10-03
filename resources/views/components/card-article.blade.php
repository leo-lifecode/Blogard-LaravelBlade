<?php

$title = Str::limit($post['title'], 55);
$idslug = Str::slug($post['slug']);
$image = $post['image'];
$datePost = $post['created_at']->diffForHumans();
$username = $post['user']['name'];
$category = $post['category']['name'];
$slugcategory = Str::slug($post['category']['slug']);
?>

<div class="space-y-2 w-full max-md:flex md:block max-md:items-center p-2 hover:bg-slate-100">
    <a href="post/{{ $idslug }}">
        <div class="max-md:w-[130px] max-md:h-full md:w-full max-md:order-2 max-md:flex max-md:items-center">
            <img class="rounded-xl shadow-md" class="w-[130px]" src={{ $image }} />
        </div>
    </a>
    <div class="text-slate-400 gap-1 text-[12px] items-center md:flex hidden">
        <p>{{ $datePost }}</p>
        <p>|</p>
        <p>{{ $post['created_at']->format('F j ') }}</p>
    </div>
    <div class="font-semibold text-sm max-md:order-1 max-md:ms-5">
        <div class="bg-blue-100 rounded-full text-blue-600 py-1 px-2 w-max hover:bg-teal-100">
            <a href="/category/{{ $slugcategory }}">
                <p class="font-semibold text-md">{{ $category }}</p>
            </a>
        </div>
        <h1 class="max-md:text-2xl lg:text-lg capitalize hover:underline">
            <a href="post/{{ $idslug }}">{{ $title }}</a>
        </h1>
        <div class="text-slate-400 flex gap-1 text-[12px] items-center lg:hidden">
            <p>{{ $datePost }}</p>
            <p>|</p>
            <p>{{ $post['created_at']->format('F j ') }}</p>
        </div>
        <div class="flex items-center mt-2 hover:underline">
            <a href="/profile/{{ $username }}">
                <div class="items-center flex gap-1">
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="25">
                    <p>{{ $username }}</p>
                </div>
            </a>
        </div>

    </div>
</div>