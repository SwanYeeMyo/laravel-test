@extends('layouts.master')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5 shadow p-5 rounded">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control @error('name')
                          is-invalid
                        @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
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
                        @enderror"  name="email" id="exampleInputPassword1" placeholder="email">
                        @error('email')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                      </div>
                    <div class="form-group">
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
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="role_id">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>

        </div>

    </div>
@endsection
