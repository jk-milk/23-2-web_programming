<!DOCTYPE html>
<html lang=kr>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>update_form</title>

    </head>
    <body>
      <form action="/update" method="POST">
        @method('PUT')
        @csrf
        <div>
          <label for="name">이름:</label>
          <input type="text" name="name" value="고길동" readonly/>
        </div>
        <div>
          <label for="birthDate">생년월일(YYYY/MM/DD):</label>
          <input type="text" name="birthDate" value="1980/02/25" readonly/>
        </div>
        <div>
          <label for="email">email:</label>
          <input type="email" name="email" value="gdgd@yju.ac.kr" />
        </div>
        <div>
          <label for="organization">소속:</label>
          <input type="organization" name="organization" value="MBC"/>
        </div>
        <input type="submit" value="제출">
      </form>


    </body>
</html>