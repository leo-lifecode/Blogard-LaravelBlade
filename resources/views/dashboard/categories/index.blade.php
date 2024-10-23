@extends('layout.layoutDashboard')
@section('content')
@vite('resources/css/base.css')

<div class="container bg-white mt-[20px] p-5 rounded-lg">
    <div class="flex justify-between items-center">
        <h1 class="text-[14px] sm:text-xl  font-semibold">Category Management</h1>
        <a href="/dashboard/category/create" class="btn btn-add text-[12px]">+ Add New Category</a>
    </div>
    @if (session()->has('success'))
    {{-- <div class="text-message font-medium text-md bg-yellow-100 p-2 rounded-lg">
        <p>{{ session('success') }}</p>
    </div> --}}
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: "{{ session('success') }}",
        });
    </script>
    @endif
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ Str::limit($category->name, 25) }}</td>
                    <td class="flex">
                        <a href="/dashboard/category/{{$category->slug}}/edit" class="btn btn-edit">Edit</a>
                        <form action="/dashboard/category/{{$category->slug}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="confirm-delete" type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection