@extends('layout.layoutDashboard')
@section('content')
<div class="container bg-white mt-[20px] p-5 rounded-lg">
    <div class="flex justify-between items-center">
        <h1 class="text-xl font-semibold">Posts Management</h1>
        <a href="#" class="btn btn-add">+ Add New Post</a>
    </div>

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
                    <td>
                        <a href="/dashboard/posts/{{$post->slug}}" class="btn btn-edit">Show</a>
                        <a href="#" class="btn btn-edit">Edit</a>
                        <a href="#" class="btn btn-delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection