@extends('layouts.master')
@section('content')
    <div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5 shadow p-5 rounded">
                <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Set Permission </label>
                        <input name="permission" type="text"
                            class="form-control @error('permission')
                            is-invalid
                        @enderror"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Permission">
                        @error('permission')
                            <div class="invalid-feedback">
                                {{ $message }}
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
