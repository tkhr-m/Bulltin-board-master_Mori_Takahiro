@extends('layouts.auth-common')

@section('title','登録内容確認')

@section('content')
<div class='form'>
  <p class='title'>以下の内容で登録します。よろしいですか？</p>
  <div>
    <form action='/added' method='post'>
      @csrf
      <table>
        <tr>
          <th>ユーザー名</th>
          <td>{{$username}}</td>
          <input type='hidden' name='username' value='{{$username}}'>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td>{{$mail}}</td>
          <input type='hidden' name='mail' value='{{$mail}}'>
        </tr>
        <input type='hidden' name='password' value='{{$password}}'>
      </table>
      <div class='form_button'>
      <input type='submit' value='登録する'>
      </div>
    </form>
    <p><a href='/register'>登録画面に戻る</a></p>
  </div>
</div>

@endsection
