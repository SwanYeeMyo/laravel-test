<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    @foreach ($articles as $article)
        <h3>{{$article['id']}}</h3>
        <h5>{{$article['name']}}</h5>
    @endforeach

</body>
</html>