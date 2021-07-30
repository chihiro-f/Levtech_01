<!doctype HTML>
<html lang = "{{ str_replace('_', '-', app()->getLocale() ) }}">
  <head>
    <meta charset="utf-8">
    <title>Blog title</title>
  </head>

  <body>
    <h1 class = "title">Blog title</h1>
    <h2 class = "editTitle">Edit</h2>
    
    <div class="content">
      
      <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="BlogTitle">
          <p>Title</p>
          <input type ="text" name="post[title]" value="{{ $post->title }}" />
        </div>
        <div class="BlogContent">
          <p>Body</p>
          <!--<textarea name="post[body]" value="{{ $post->body }}"></textarea>-->
          <input type = "text" name="post[body]" value="{{ $post->body }}" />
        </div>
        <input type="submit" value="UPDATE" />
      </form>
      
    </div>

    <p class="back">[<a href="/posts/{{ $post->id }}">戻る</a>]</p>

  </body>

</html>
