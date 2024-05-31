@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/delete.css">
@endsection

@section('main')
<form action="delete" method="post">
<div class="container">
    <div class="sub-title">
        <h3 class="sub-title-sub">예약 조회</h3>
        <h3 class="sub-title-sub">내 정보 변경</h3>
        <h3>회원 탈퇴</h3>
    </div>
    <div class="main-title">
        <div class="main-main">
            <img class="man" src="/img/man.png">
            <h2 class="head-h2">이현수님 안녕하세요.</h2>
        </div>
        <div class="main-box">
            <h2>정말로 탈퇴하시겠습니까?</h2>
            <div class="end">
                <button type="submit" class="yes">예</button>
                <a href="{{ route('update') }}" class="no">아니요</a>
            </div>
        </div>
    </div>
</div>
</form>
@endsection