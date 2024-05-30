@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/update.css">
@endsection

@section('main')
<form action="update" method="post">
<div class="container">
    <div class="sub-title">
        <a class="sub-title-sub" href="{{ route('reserve') }}">예약 조회</a>
        <h3>내 정보 변경</h3>
        <a class="sub-title-sub" href="{{ route('question') }}">회원 탈퇴</a>
    </div>
    <div class="main-title">
        <div class="main-main">
            <img class="man" src="/img/man.png">
            <h2>이현수님 안녕하세요.</h2>
        </div>
        <h2 class="start">내 정보 변경</h2>
        <hr>
        <div class="update">
            <div class="sub-title-main">
                <div class="title">아이디</div>
                <div class="content">이현수</div>
                <div class="padding"></div>
            </div>
            <hr>
            <div class="sub-title-main">
                <div class="title">비밀번호</div>
                <div class="content">********</div>
                <button type="submit" class="change">비밀번호 변경</button>
            </div>
            <hr>
            <div class="sub-title-main">
                <div class="title">이름</div>
                <div class="content">이현수달</div>
                <div class="padding"></div>
            </div>
            <hr>
            <div class="sub-title-main">
                <div class="title">휴대전화</div>
                <div class="content">010-6275-4954</div>
                <div class="padding"></div>
            </div>
            <hr>
            <div class="sub-title-main">
                <div class="title">차종</div>
                <div class="content">녹차</div>
                <button type="submit" class="change">차종 변경</button>
            </div>
            <hr>
            <div class="sub-title-main">
                <div class="title">차번호</div>
                <div class="content">차번호 23가2313</div>
                <div class="padding"></div>
            </div>
            <hr>
            <div class="end">
                <button type="submit" class="yes">확인</button>
                <a href="{{ route('update') }}" class="no">취소</a>
            </div>
        </div>
    </div>
</div>
</form>
@endsection