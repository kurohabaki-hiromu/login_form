<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ログインフォーム</h1>
    <form name="login" action="/auth/login" method="post">
      {{csrf_field() }}
      メールアドレス:<input type="text" name="email" size="30" value="{{old('email') }}"><br />
      パスワード:<input type="text" name="password" size="30"><br />
      <button type="submit" name="action" value="send">ログイン</button>
    </form>
  </body>
</html>
