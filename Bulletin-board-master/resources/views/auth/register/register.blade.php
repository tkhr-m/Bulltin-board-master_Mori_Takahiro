@extends('layouts.auth-common')

@section('title','ユーザー登録')

@section('content')
  <div class='form'>
    <p class='title'>ユーザー登録</p>
    <form action='/confirm' method='post'>
      @csrf
      <div class='form_item'>
        <label for='username'>ユーザー名</label>
        <div>
          <input type='text' id='username' name='username'>
        </div>
      </div>
      <div class='form_item'>
        <label for='mail'>メールアドレス</label>
        <div>
          <input type='email' id='mail' name='mail'>
        </div>
      </div>
      <div class='form_item'>
        <label for='password'>パスワード</label>
        <div>
          <input type='password' id='password' name='password'>
        </div>
      </div>
      <div class='form_item'>
        <label for='confirm'>パスワード確認</label>
        <div>
          <input type='password' id='confirm' name='password_confirm'>
        </div>
      </div>
      <div class='form_button'>
        <input type='submit' value='確認'>
      </div>
    </form>
     <p><a href='/login'>ログイン画面に戻る</a></p>
  </div>
@endsection
