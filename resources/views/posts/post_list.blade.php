<!DOCTYPE html>
<html lang=kr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>게시글 리스트</title>

    </head>
    <body>
      <div><a href="/posts/create">게시글 작성하기</a></div>
      <h2>게시글 리스트 {{$count}}개</h2>
      <table>
        <tr>
          <th>연번</th>
          <th>제목</th>
          <th>작성자</th>
          <th>작성일</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
          <td>{{$loop->index+1}}</td>
          <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
          <td>{{$post->user_id}}</td>
          <td>{{$post->created_at}}</td>
        </tr>
        @endforeach
        
      </table>
    </body>
</html>