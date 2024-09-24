<x-layout>
    <div class="flex justify-center bg-slate-50 min-h-screen p-4">
        <div
            class="w-full md:max-w-[768px] h-max text-black flex-wrap flex flex-col gap-7"
        >
            <main class="bg-white">
                <div class="text-black mb-2 text-2xl font-bold">
                    <h1>{{ $post['title'] }}</h1>
                </div>
                <div class="flex gap-2 items-center mb-4">
                    <div>
                        <img
                            src="{{$post['image']}}"
                            alt="profile"
                            width="45"
                        />
                    </div>
                    <div class="space-y-1">
                        <p class="font-semibold text-md">name: author</p>
                        <p class="text-slate-500">updated: dd-mm-yyyy</p>
                    </div>
                </div>
                <article>
                    <p>
                        {{ $post['content'] }}
                    </p>
                </article>
            </main>

            <div class="w-full space-y-4 bg-white p-3">
                <div class="space-y-4">
                    <p class="font-semibold">Comments</p>
                    <div class="space-y-3">
                        <div class="flex gap-2 items-center">
                            <div>
                                <img
                                    src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                    alt="profile"
                                    width="45"
                                />
                            </div>
                            <div class="">
                                <p class="font-semibold text-md">name: author</p>
                                <p class="text-slate-500">updated: dd-mm-yyyy</p>
                            </div>
                        </div>
                        <p class="ms-6">this comment will be forgiven</p>
                    </div>
                </div>
                
                
                <div class="w-full">
                    <p class="font-semibold">Leave Comment</p>
                    <textarea class="w-full h-[200px] border border-black rounded-md shadow-md p-2" placeholder="Share Your Opinion About This Post">
                    </textarea>
                    <button class="w-full bg-black text-white py-1 text-lg rounded-md hover:bg-slate-900">Submit</button>
                </div>
            </div>

        </div>
    </div>
</x-layout>