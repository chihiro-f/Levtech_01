<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Blog title</title>
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
  </head>
    
    
  <body>

    <h1>Blog title</h1>
    
    <form action="/posts" method="POST">
      
      @csrf
      <div class="BlogTitle">
        <p>Title</p>
        <!-- タイトル入力 -->
        <input type ="text" name="post[title]" placeholder="タイトルを入力"/>
        <p class = "title_error" style="color:red">{{ $errors->first('post.title') }}</p>
      </div>

      <!-- 内容の入力 -->
      <div class="BlogContent">
        <p>Body</p>
        <textarea name="post[body]" placeholder="ブログの内容を入力"></textarea>
        <p class = "body_error" style="color:red">{{ $errors->first('post.body') }}</p>
      </div>
      <input type="submit" value="保存"/>
      
    </form>
    
    <div class = "back">[<a href="/">back</a>]</div>
    
  </body>
  
</html>
