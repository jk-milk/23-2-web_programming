<!DOCTYPE html>
<html lang=kr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>user_info</title>

    </head>
    <body>
      @if (count($user) == 0)
        <h2>사용자를 찾을 수 없습니다.</h2>
      @else
        <h2>사용자 상세 정보</h2>
        <h3>{{$user["name"]}}님의 등록 정보는 아래와 같습니다.</h3>
        이메일 : {{$user["email"]}} <br>
        생년월일 : {{$user["birthDate"]}} <br><br>

        <a href="/users/{{$user['id']}}/edit">
          <input type="submit" value="수정">
        </a>
        &nbsp;&nbsp;

        <form method="post" action="/users/{{$user['id']}}">
          @method("delete")
          @csrf
          <input type="submit" value="삭제">
        </form>
      @endif

    </body>
</html>