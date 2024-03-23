@extends('layouts.master')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5 shadow p-5 rounded">
                <form action="{{ route('roles.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Set Roles </label>
                        <input name="role" type="text" class="form-control @error('role')
                            is-invalid
                        @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Set Roles">
                            @error('role')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple name="permissions[]" class="form-control @error('permissions')
                            is-invalid
                        @enderror " id="exampleFormControlSelect2">
                          @foreach ($permissions as $permission)
                          <option value="{{$permission->name}}">{{ $permission->name }}</option>
                              
                          @endforeach
                        </select>
                        @error('permissions')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                      </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-md-3"></div>

        </div>

    </div>
@endsection
