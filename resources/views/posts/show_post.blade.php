<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>게시글 상세보기</title>
</head>
<body>
  <div>
    제목: {{$post->title}}
  </div>
  <div>
    내용: {{$post->content}}
  </div>
  <div>
    작성자: {{$post->user_id}}
  </div>
  <div>
    생성일: {{$post->created_at}}
  </div>
  <div>
    수정일: {{$post->updated_at}}
  </div>
  <div>
    <form action="/posts/{{$post->id}}/edit" method="get" style="display:inline-block">
      <input type="submit" value="수정"/>
    </form>
    <form action="" method="post" style="display:inline-block">
      @csrf
      @method("delete")
      <input type="submit" value="삭제"/>
    </form>
  </div>
</body>
</html>