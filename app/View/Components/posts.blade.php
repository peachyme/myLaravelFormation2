<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>list of posts</h1>
    @if($posts->count())
        @foreach($posts as $post)
        <h3>{{$post->id}} : {{$post->title}}</h3>
        @endforeach
    @else
        <span>No posts available</span>
    @endif
</body>
</html>
