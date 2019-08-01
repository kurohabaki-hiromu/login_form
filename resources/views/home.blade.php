<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    こんにちは！
    @if(Auth::check())
     {{\Auth::user()->name}}さん<br />
     <a href="/bbs">掲示板へ</a><br />
     <a href="/auth/logout">ログアウト</a>
    @else
     ゲストさん<br />
     <a href="/auth/login">ログイン</a><br />
     <a href="/auth/register">会員登録</a>
    @endif
  </body>
</html>
