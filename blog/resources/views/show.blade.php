<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        
        <script>
        function deletePost(e){
            'use strict';
            if(confirm('削除を実行しますか？')){
                document.getElementById('form_delete').submit();
            }
        }
        </script>
    </head>
    
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none" />
            <p class="delete">[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
        
        <div class="posts">
            <p class="content__post">{{ $post->title }}</h2>
            <p class="body">{{ $post->body }}</p>
            <p class="updated_at">{{ $post->updated_at }}</p>
        </div>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <div class="back"><a href="/">back</a></div>
    </body>
</html>