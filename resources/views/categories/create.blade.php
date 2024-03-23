<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="{{route('category.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="text" name="name" ><br>
        @error('name')
        <div class="alert text-red-400 alert-danger">{{ $message }}</div>
        @enderror
        <input type="file" name="image"><br>
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>

        @enderror
        <input type="text" name="description"><br>
        <select name="status" id="">
            <option value="0">True</option>
            <option value="1">False</option>
        </select>
        <input type="submit" value="submit" >
    </form>
    

</body>
</html>