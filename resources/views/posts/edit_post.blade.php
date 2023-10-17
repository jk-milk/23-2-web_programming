<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>게시글 수정</title>
</head>
<body>
  <form action="/posts/{{$post->id}}" method="post">
    @csrf
    @method("put")
    <div>
      <label>제목:</label><input name="title" type="text" value="{{$post->title}}">
    </div>
    <div>
      <label>내용:</label><textarea name="content">{{$post->content}}</textarea>
    </div>
    <div>
      <label>작성자:</label> {{$post->user_id}}
    </div>
    <div>
      <label>작성일:</label> {{$post->created_at}}
    </div>
    <div>
      <label>수정일:</label> {{$post->updated_at}}
    </div>
    <div>
      <input type="submit" value="수정">
    </div>
  </form>
</body>
</html>