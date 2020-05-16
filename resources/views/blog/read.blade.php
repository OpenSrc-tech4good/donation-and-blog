<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - {{ $data->title }}</title>
</head>
<body>
    <h1>{{ $data->title }}</h1>
    <p>{{ $data->author }}</p>
    <hr>
    <p>{{ $data->content }}</p>
</body>
</html>