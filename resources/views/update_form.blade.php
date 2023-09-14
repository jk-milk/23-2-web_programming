<!DOCTYPE html>
<html lang=kr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>update_form</title>

    </head>
    <body>
      <form action="/users/{{$user['id']}}" method="POST">
        @method('PUT')
        @csrf
        이름 : <input type="text" name="name" value='{{$user["name"]}}'> <br>
        이메일 : <input type="text" name="email" value='{{$user["email"]}}'> <br>
        생년월일 : <input type="text" name="birthDate" value='{{$user["birthDate"]}}'> <br>
        <input type="submit" value="확인">
      </form>
    </body>
</html>