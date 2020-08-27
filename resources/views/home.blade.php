<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Communication</title>
  <style>
    .item {
      margin: 10px;
      padding: 10px;
      border: 2px solid black;
    }

    p {
      display: inline;
    }
  </style>
</head>
<body>
  <h1>Communication</h1>
  <form action="/home" method="post">
    <table>
    @csrf
      <tr><th>Title:  </th><td><input type="text" name="title"></td></tr>
      <tr><th>Name:  </th><td><input type="text" name="name"></td></tr>
      <tr><th>Message:  </th><td><input type="text" name="message"></td></tr>
      <tr><th></th><td><input type="submit" value="Write"></td></tr>
    </table>
  </form>

  <div class="item">
    <div class="title">
        <p>{{$id}}</p>
        <p>{{$title}} :</p>
        <p>{{$name}}</p>
    </div>
    <div class="message">
      {{$message}}
    </div>
  </div>

  <div class="item">
    <div class="title">
        <p>{{$id}}</p>
        <p>{{$title}} :</p>
        <p>{{$name}}</p>
    </div>
    <div class="message">
      {{$message}}
    </div>
  </div>

</body>
</html>
