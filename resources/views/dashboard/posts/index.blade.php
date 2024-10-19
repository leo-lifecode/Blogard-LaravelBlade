@extends('layout.layoutDashboard')
@section('content')
@vite('resources/css/base.css')
<div class="container bg-white mt-[20px] p-5 rounded-lg">
    <div class="flex justify-between items-center">
        <h1 class="text-[14px] sm:text-xl font-semibold">Posts Management</h1>
        <a href="/dashboard/posts/create" class="btn btn-add max-sm:text-[12px]">+ Add New Post</a>
    </div>
    <form>
        <div class="max-w-[300px] w-full flex gap-2">
            <input type="text" name="search" id="search" placeholder="Search Posts....."
                class="w-full rounded-lg px-4 py-2 border border-blue-300" value="{{ request('search') }}">
            <button class="py-2 px-4 rounded-lg bg-yellow-100"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </form>
    @if (session()->has('success'))
    <div class="text-message font-medium text-md bg-yellow-100 p-2 rounded-lg my-[20px]">
        <p>{{ session('success') }}</p>
    </div>
    @endif
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($post->title, 20) }}</td>
                    <td>{{ $post->user->username }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->created_at->translatedFormat('F d, Y')}}</td>
                    <td class="flex">
                        <a href="/dashboard/posts/{{$post->slug}}" class="btn btn-edit">Show</a>
                        <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-edit">Edit</a>
                        <form action="/dashboard/posts/{{$post->slug}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete"
                                onclick="confirm('Are you sure delete post?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection