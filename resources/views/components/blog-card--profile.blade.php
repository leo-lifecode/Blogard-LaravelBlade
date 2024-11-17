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
            <div>
                <h1 class="max-md:text-xl md:text-2xl">
                    {{ $title }}
                </h1>
                <p class="mt-2 text-slate-400 lg:text-lg">{{ $datePost }}</p>
            </div>
            {{-- @if (Auth::user()->id == $post->user_id)
            <div class="my-2 ms-[-5px] flex">
                <a href="/writeblog/edit/{{ $post->slug }}"
                    class=" py-2 px-3 bg-blue-200 rounded-xl hover:bg-blue-300 me-1">Edit</a>
                <form action="/writeblog/delete/{{ $post->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-3 bg-orange-300 rounded-xl hover:bg-orange-500"
                        id="confirm-delete">Delete</button>
                </form>
            </div>
            @endif --}}
            @auth
                @if (Auth::user()->id == $post->user_id)
                <div class="my-2 ms-[-5px] flex">
                    <a href="/writeblog/edit/{{ $post->slug }}"
                        class=" py-2 px-3 bg-blue-200 rounded-xl hover:bg-blue-300 me-1">Edit</a>
                    <form action="/writeblog/delete/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="py-2 px-3 bg-orange-300 rounded-xl hover:bg-orange-500"
                            id="confirm-delete">Delete</button>
                    </form>
                </div>
                @endif
            @endauth

        </div>
        <div class="min-w-[160px] max-w-[200px]  flex items-center rounded-xl">
            <img class="rounded-xl shadow-xl min-w-[160px] max-w-[200px] h-[130px]" src={{ asset('storage/' . $image)
                }} />
        </div>
    </div>
</a>