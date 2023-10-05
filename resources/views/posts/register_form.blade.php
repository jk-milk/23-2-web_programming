<!DOCTYPE html>
<html lang=kr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>register_form</title>

    </head>
    <body>
      <form action="/posts" method="POST">
        @csrf
        <div>
          <label>제목:<input type="text" name="title" /> </label>
        </div>
        <div>
          <label>내용:<textarea name="content" rows="5"></textarea> </label>
        </div>
        <input type="submit" value="등록">
      </form>
    </body>
</html>
