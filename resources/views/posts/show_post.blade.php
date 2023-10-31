<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>게시글 상세보기</title>
</head>
<body>
  <div>제목: {{$post->title}}</div>
  <div>내용: {{$post->content}}</div>
  <div>작성자: {{$post->user_id}}</div>
  <div>생성일: {{$post->created_at}}</div>
  <div>수정일: {{$post->updated_at}}</div>
  <div>
    <form action="/posts/{{$post->id}}/edit" method="get" style="display:inline-block">
      <input type="submit" value="수정"/>
    </form>
    <form action="/posts/{{$post->id}}" method="post" style="display:inline-block" onsubmit="return confirm('Are you sure to delete?')">
      @csrf
      @method("delete")
      <input type="submit" value="삭제"/>
    </form>
  </div>
  <div>
    <hr>
    <h4>댓글 등록</h4>
    <form action="/posts/{{$post->id}}/comments" method="post">
      @csrf
      <div>
        <textarea cols="30" rows="1" name="content"></textarea>
      </div>
      <input type="submit" value="댓글등록">
    </form>
  </div>
  <div>
    <h2>댓글 리스트({{$??}}개)</h2>
    <table>
      <tr>
        <th>연번</th><th>내용</th><th>작성자</th><th>작성일</th>
      </tr>
    </table>
  </div>
</body>
</html>