@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('main')
<form action="login" method="post">
    <div class="container">
        <h2>로그인</h2>
        <div class="main-login">
            <div class="id">
                <label class="username" for="username">아이디</label>
                <input class="user-name" type="text" id="username" name="username">
            </div>
            <div class="pass">
                <label class="userpass" for="password">비밀번호</label>
                <input class="user-pass" type="password" id="password" name="password">
            </div>
            <div class="button">
                <button type="submit" class="login">로그인</button>
                <a href="{{ route('register') }}">회원가입</a>
            </div>
        </div>
    </div>
</form>
@endsection