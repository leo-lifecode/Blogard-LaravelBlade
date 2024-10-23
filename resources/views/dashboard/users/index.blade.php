@extends('layout.layoutDashboard')
@section('content')
@vite('resources/css/base.css')
<div class="container bg-white mt-[20px] p-5 rounded-lg">
    <div class="flex justify-between items-center">
        <h1 class="text-xl font-semibold">Users Management</h1>
    </div>
    @if (session()->has('success'))
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
                    <th>Profile</th>
                    <th>email</th>
                    <th>Role</th>
                    <th>Post</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>
                        <img class="rounded-full w-[50px]"
                            src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'https://cdn-icons-png.flaticon.com/512/149/149071.png' }}">
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</td>
                    <td>{{ $user->posts->count() }}</td>
                    <td class="flex">
                        <a href="/dashboard/users/{{$user->id}}/edit" class="btn btn-edit">Edit</a>
                        <form action="/dashboard/users/{{$user->id}}" method="user">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete"
                                id="confirm-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection