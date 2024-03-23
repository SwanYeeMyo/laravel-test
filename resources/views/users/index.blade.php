@extends('layouts.master')
@section('content')
    <a href="{{ route('users.create') }}" class="my-2 mx-2 btn btn-primary">Create</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Roles</th>

                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                {{-- @dd($user) --}}
                <tr>

                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    
                    <td>{{ $user->email }}</td>
                    <td>
                        <span class="badge badge-success"> {{ $user->roles[0]['name'] }}
                        </span>

                    </td>
                   
                    <td>
                        <div class="d-flex justify-content-center gap-5  ">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn p-2 btn-primary">Edit</a>
                            @if ($user->id !== Auth::user()->id)
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="mx-3 btn btn-danger  " type="submit">Delete</button>
                                </form>
                            @endif
                        </div>


                    </td>
            @endforeach

            </tr>
        </tbody>
    </table>
@endsection
