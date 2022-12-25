<!doctype html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>ログインページ</title>
    <link href='login.css' rel='stylesheet'>
  </head>
  <body>
    <p>ログイン</p>
    <div>
      <form action='/login' method='post'>
        @csrf
        <div>
          <label for='mail'>メールアドレス</label>
          <div>
            <input type='email' id='mail' name='mail'>
          </div>
        </div>
        <div>
          <label for='password'>パスワード</label>
          <div>
            <input type='password' id='password' name='password'>
          </div>
        </div>
        <div>
          <input type='submit' value='ログイン'>
        </div>
      </form>
    </div>
  </body>
</html>
