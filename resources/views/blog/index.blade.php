<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    @include('partials.blog-nav')
    <div class="jumbotron">
        <div class="container">
            <h2>Welcome to the INSERTCAUSE project blog!</h2>
            <br>
            <p>Here you can find the top news for our cause</p>
        </div>
    </div>
    <div class="container">
        @foreach ($data as $post)
            <a href="/blog/{{ $post->id }}/">
                {{ $post->title }}
                <br>
            </a>
        @endforeach
    </div>
    
    {{ $data->links() }}
</body>
</html>