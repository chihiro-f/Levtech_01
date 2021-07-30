<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="posts">
            <h2 class="content__post">{{ $post->title }}</h2>
                <p class="body">{{ $post->body }}</p>
                <p class="updated_at">{{ $post->updated_at }}</p>
        </div>
        
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <div class="back"><a href="/">back</a></div>
    </body>
</html>
