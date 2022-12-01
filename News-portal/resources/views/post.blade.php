<!DOCTYPE html>
<head>
    <title>News portal</title>
    <link href="/app.css" rel="stylesheet">
</head>

<article>
    <h1>{!! $post->title !!}</h1>
    <p>
        By <a href="#">Oleksii Fadieiev</a> in <a href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a>
    </p>
    <div>
        {!! $post->body !!}
    </div>
</article>

<a href="/">Go back</a>

