<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>簡易掲示板</h1>
    <form name="bbsform" action="/bbs" method="post">
      {{csrf_field() }}
      message:<input type="text" name="message" size="30">
      user:<input type="text" name="user" size="30">
      <button type="submit" name="action" value="send">投稿</button>
    </form>
    <h2>投稿一覧(0件)</h2>
    <ul>
      <li>まだ投稿はありません</li>
    </ul>
  </body>
</html>
