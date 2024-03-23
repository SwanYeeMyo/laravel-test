<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category['id']}}</td>
                    <td>{{$category['name']}}</td>
                    <td>{{$category['description']}}</td>
                    
                    <td>{{$category['status']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

</body>
</html>