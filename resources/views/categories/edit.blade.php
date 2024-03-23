@extends('layouts.master')
@section('content')
<form action="{{route('category.update',$category->id)}}" method="POST">
    @csrf
    <input type="text" value="{{$category->name}}" name="name" >
    <input type="text"  value="{{$category->description}}" name="description">
    <select name="status" id="">
        <option @if($category->status == 0)
            selected
        @endif value="0">True</option>
        <option  @if($category->status == 1)
            selected
        @endif value="1">False</option>
    </select>
    <input type="submit" value="Update" >
</form>
@endsection
  
    
    

