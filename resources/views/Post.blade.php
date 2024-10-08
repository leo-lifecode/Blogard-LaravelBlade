<?php


$sluguser = $post['slug'];
$idslug = $post['id'];
$image = $post['image'];
$datePost = $post['created_at']->diffForHumans();
$username = $post['user']['username'];
$category = $post['category']['name'];
$slugcategory = Str::slug($post['category']['slug']);
$content = $post['content'];

?>


<x-layout>
    @vite('resources/css/base.css')

    <div class="flex justify-center bg-slate-50 min-h-screen p-4">
        <div class="w-full md:max-w-[768px] h-max text-black flex-wrap flex flex-col gap-7">
            <main class="bg-white">
                <div class="text-black mb-2 text-2xl font-bold">
                    <h1 class="capitalize">{{ $post['title'] }}</h1>
                </div>
                <div class="flex gap-2 mb-4 flex-col">
                    <div id="container-profile" class="flex gap-2 items-center">
                        <div id="profile">
                            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="35">
                        </div>
                        <div>
                            <a href="/profile/{{ $username }}" class="hover:underline">
                                <p class="font-semibold text-md">{{ $username}}</p>
                            </a>
                            <p class="text-slate-500">{{ $datePost }}</p>
                        </div>
                    </div>
                </div>
                <article>
                    <div id="Image-post" class="bg-black w-full">
                        <img src="{{ $image }}" alt="profile" class="w-full max-h-[450px] min-h-[300px]" />
                    </div>
                    <p>{!! $content !!}</p>
                </article>
            </main>

            <div class="w-full space-y-4 bg-white p-3">
                <div class="space-y-4">
                    <p class="font-semibold">Comments</p>
                    <div class="space-y-3">
                        <div class="flex gap-2 items-center">
                            <div>
                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="45" />
                            </div>
                            <div>
                                <p class="font-semibold text-md">author</p>
                                <p class="text-slate-500">dd-mm-yyyy</p>
                            </div>
                        </div>
                        <p class="ms-6">this comment will be forgiven</p>
                    </div>
                </div>

                <div class="w-full">
                    <p class="font-semibold">Leave Comment</p>
                    <textarea class="w-full h-[200px] border border-black rounded-md shadow-md p-2"
                        placeholder="Share Your Opinion About This Post">
                    </textarea>
                    <button
                        class="w-full bg-black text-white py-1 text-lg rounded-md hover:bg-slate-900">Submit</button>
                </div>
            </div>
        </div>
    </div>
</x-layout>