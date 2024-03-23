@extends('layouts.master')
@section('content')
<a href="{{route('permissions.create')}}" class="my-2 mx-2 btn btn-primary">Create</a>
   <div class="p-3 rounded shadow">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Permission</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($permissions as $permission)
            <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <div class="d-flex ">
                            <a href="{{route('permissions.edit',$permission->id)}}" class="btn p-2 btn-primary" >Edit</a>
                            <form action="{{route('permissions.destroy',$permission->id)}}" method="POST">
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
