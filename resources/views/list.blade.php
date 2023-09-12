<!DOCTYPE html>
<html lang=kr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>list</title>

    </head>
    <body>
      <form action="/remove" method="post">
        @csrf
        @method('delete')
        <select name="name">
          <option value="김민재">김민재</option>
          <option value="오타니">오타니</option>
          <option value="손흥미">손흥민</option>
          <option value="와타나베">와타나베</option>
          <option value="케인">케인</option>
          <option value="호날두">호날두</option>
          <option value="메시">메시</option>
        </select>
        <button>삭제</button>
      </form>

    </body>
</html>