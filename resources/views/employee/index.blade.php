@extends('layouts.master')
@section('content')
<a href="{{route('roles.create')}}" class="my-2 mx-2 btn btn-primary">Create</a>
   <div class="p-3 rounded shadow">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Roles</th>
                <th scope="col" >Permission</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($roles as $role)
            <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $role->name }}</td>
                    <td>
                        @foreach ($role->permissions as $permission )
                        <span class="badge badge-success">{{$permission->name}}</span>
                        @endforeach
                    </td>
                    <td>
                        <div class="d-flex ">
                            <a href="{{route('roles.edit',$role->id)}}" class="btn p-2 btn-primary" >Edit</a>
                            <form action="{{route('roles.destroy',$role->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="mx-3 btn btn-danger  "  type="submit" >Delete</button>
                            </form>
                        </div>
                        

                    </td>
                @endforeach

            </tr>
        </tbody>
    </table>
   </div>
@endsection
