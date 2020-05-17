<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - {{ $data->title }}</title>
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
        <div class="row">
            <div class="col-12 col-md-7">
                <h1>{{ $data->title }}</h1>
                <p>{{ $data->author }}</p>
                <hr>
                <p>{{ $data->content }}</p>
            </div>
            <div class="col-12 col-md-5">
                <h2>Recent Posts</h2>
                @foreach($recents as $recent)
                <a href="/blog/{{$recent->id}}">
                <h3>{{ $recent->title }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>