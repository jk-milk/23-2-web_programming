<!DOCTYPE html>
<html lang=kr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>register_form</title>

    </head>
    <body>
      <form action="/users" method="POST">
        @csrf
        <div>
          <label for="name">이름:</label>
          <input type="text" name="name" />
        </div>
        <div>
          <label for="birthDate">생년월일(YYYY/MM/DD):</label>
          <input type="text" name="birthDate" />
        </div>
        <div>
          <label for="email">email:</label>
          <input type="email" name="email" />
        </div>
        <div>
          <label for="organization">소속:</label>
          <input type="organization" name="organization" />
        </div>
        <input type="submit" value="등록">
      </form>
    </body>
</html>
