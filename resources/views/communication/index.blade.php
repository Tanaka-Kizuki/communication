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
  <form action="/communication" method="post">
    <table>
    @csrf
      <tr><th>Title:  </th><td><input type="text" name="title"></td></tr>
      <tr><th>Name:  </th><td><input type="text" name="name"></td></tr>
      <tr><th>Message:  </th><td><input type="text" name="message"></td></tr>
      <tr><th></th><td><input type="submit" value="Write"></td></tr>
    </table>
  </form>
  @foreach ($items as $item)
  <div class="item {{$item->id}}">
    <div class="title">
        <p>{{$item->id}}</p>
        <p>{{$item->name}}</p>
        <p>{{$item->title}}</p>
    </div>
    <div class="message">
      {{$item->message}}
    </div>
    <a href="/communication/edit/?id={{$item->id}}">編集</a>
  </div>
  @endforeach


</body>
</html>
