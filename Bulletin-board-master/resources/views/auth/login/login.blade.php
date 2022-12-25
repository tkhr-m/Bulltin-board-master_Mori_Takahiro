@extends('layouts.auth-common')

@section('title','ログイン')

@section('content')
  <div class='form'>
    <p class='title'>ログイン</p>
    <form action='/login' method='post'>
      @csrf
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
      <div class='form_button'>
        <input type='submit' value='ログイン'>
      </div>
      <p>新規ユーザー登録は<a href='/register'>こちら</a></p>
    </form>
  </div>
@endsection
