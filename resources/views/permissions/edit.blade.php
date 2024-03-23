@extends('layouts.master')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5 shadow p-5 rounded">
                <form action="{{ route('permissions.update',$permission->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Set Permission </label>
                        <input value="{{$permission->name}}" name="permission" type="text" class="form-control @error('permisssion')
                            is-invalid
                        @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter Permission">
                    </div>
                    @error('permission')
                        <div class="invalid-message">
                            {{$message}}
                        </div>
                    @enderror
                 

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-md-3"></div>

        </div>

    </div>
@endsection
