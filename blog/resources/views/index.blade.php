<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

    </head>
    <body>
        <h1>Blog Name</h1>
        <p class = 'create'>[<a href='/posts/create'>create</a>]</p>

        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                <p class='body'>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>