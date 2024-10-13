@extends('layout.layoutDashboard')

@section('content')
@vite('resources/css/base.css')

<div class="flex justify-center bg-white min-h-max p-4 mt-[20px] rounded-xl">
    <div class="w-full h-max text-black flex-wrap flex flex-col gap-4">
        <h1 class="text-2xl font-semibold">Edit Category</h1>
        <main class="bg-white text-black">
            <form action="/dashboard/category/{{ $category->slug}}" method="POST" class="w-full">
                @method('PUT')
                @csrf
                <div class="-mx-4">
                    <div class="px-4 max-sm:w-[302px] sm:max-w-screen-md">
                        <div class="mb-10 items-center grid grid-cols-1 sm:grid-cols-2 grid-rows-1">
                            <label for="name" class="text-xl font-medium">Name</label>
                            <input name="name" id="name" type="text" placeholder="name your category"
                                class="border border-slate-300 w-full bg-transparent rounded-md py-[15px] px-2"
                                value="{{ old('name', $category->name) }}" />
                            @error('name')
                            <div class="text-red-500"> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="w-full px-4">
                        <button type="submit"
                            class="px-4 py-2 bg-stone-700 text-md text-white rounded-xl hover:bg-stone-500 cursor-pointer text-[14px] font-medium">Submit</button>
                        <a href="/dashboard/category" class="no-underline px-4 py-2 bg-stone-700 text-white rounded-xl hover:bg-stone-500 font-medium
                            cursor-pointer">Cancel
                        </a>
                    </div>
                </div>
            </form>
        </main>
    </div>
</div>
@endsection