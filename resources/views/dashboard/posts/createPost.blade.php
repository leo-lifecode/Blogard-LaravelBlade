@extends('layout.layoutDashboard')

@section('content')

<div class="flex justify-center bg-white min-h-max p-4 mt-[20px] rounded-xl">
    <div class="w-full h-max text-black flex-wrap flex flex-col gap-4">
        <h1 class="text-2xl font-semibold">Buat Post</h1>
        <main class="bg-white text-black">
            <form action="/dashboard/posts" method="POST" class="w-full">
                @csrf
                <div class="-mx-4">
                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="title" class="text-xl font-medium">Title</label>
                            <input name="title" id="title" type="text" placeholder="title your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2" value="{{ old('title') }}" />
                            @error('title')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="slug" class="text-xl font-medium">Slug</label>
                            <input name="slug" id="slug" type="text" placeholder="Slug your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2" value="{{ old('slug') }}" />
                            @error('slug')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md ">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="image" class="text-xl font-medium">Image</label>
                            <input name="image" id="image" type="text" placeholder="Link Image your blog"
                                class="w-full bg-transparent rounded-md py-[15px] px-2" value="{{ old('image') }}" />
                            @error('image')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                            {{-- <label class="block">
                                <span class="sr-only">Choose profile photo</span>
                                <input type="file" class="block w-full text-sm text-slate-500
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-full file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-violet-50 file:text-violet-700
                                  hover:file:bg-violet-100
                                " />
                            </label> --}}
                        </div>
                    </div>

                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="category_id" class="text-xl font-medium">
                                Category
                            </label>
                            <div class="relative z-20 w-full">
                                <select name="category_id" id="category_id"
                                    class="relative z-20 w-full rounded-lg bg-transparent py-[15px] px-2">
                                    @foreach ($Categories as $Category)
                                    @if ( old('category_id') == $Category->id )
                                    <option value={{$Category->id}} selected >{{ $Category->name }}</option>
                                    @else
                                    <option value={{$Category->id}}>{{ $Category->name }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <span
                                    class="absolute right-4 top-1/2 z-10 mt-[-2px] h-[12px] w-[12px] -translate-y-1/2 rotate-45 border-r-2 border-b-2">
                                </span>
                            </div>
                            @error('category_id')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full sm:px-4 max-w-full">
                        <div class="mb-10">
                            <label for="" class="text-xl font-medium">
                                Content
                            </label>
                            <div class="max-w-screen-md pt-4 ">
                                <trix-toolbar id="my_toolbar"></trix-toolbar>
                                <input id="content" type="hidden" name="content">
                                <div class="more-stuff-inbetween"></div>
                                <trix-editor toolbar="my_toolbar" input="content"></trix-editor>
                            </div>
                            @error('content')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full px-4">
                        <button type="submit"
                            class="px-4 py-2 bg-stone-700 text-white rounded-xl hover:bg-stone-500 cursor-pointer">Submit</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>
@endsection