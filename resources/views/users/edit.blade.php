@extends('layouts.master')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5 shadow p-5 rounded">
                <form action="{{ route('users.update',$user->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control @error('name')
                          is-invalid
                        @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                           value="{{$user->name}}" placeholder="Enter name">
                            @error('name')
                              <div class="invalid-feedback">
                                {{$message}}
                              </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control @error('email')
                          is-invalid
                        @enderror" value="{{$user->email}}"  name="email" id="exampleInputPassword1" placeholder="email">
                        @error('email')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                      </div>
                    {{-- <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="@error('password')
                          is-invalid
                        @enderror form-control " id="exampleInputPassword1" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                      </div>
                    <div class="form-group ">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div> --}}
                    

                    <button type="button" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-md-3"></div>

        </div>

    </div>
@endsection
