@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('main')
    <form action="register" method="post">
        <div class="container">
            <h2>회원가입</h2>
            <div class="main-box">
                <hr>
                <div class="main-box-solo">
                <div class="main-title">아이디</div>
                <div class="main-content">이현수</div>
                <button type="submit" class="main-button">중복체크</button>
            </div>
            <hr>
            <div class="main-box-solo">
                <div class="main-title">비밀번호</div>
                <div class="main-content">********</div>
                <div></div>
            </div>
            <hr>
            <div class="main-box-solo">
                <div class="main-title">비밀번호 확인</div>
                <div class="main-content">********</div>
                <div></div>
            </div>
            <hr>
            <div class="main-box-solo">
                <div class="main-title">이름</div>
                <div class="main-content">이현수수깡</div>
                <div></div>
            </div>
            <hr>
            <div class="main-box-solo">
                <div class="main-title">휴대전화</div>
                <div class="main-content">010-6275-4954</div>
                <div></div>
            </div>
            <hr>
            <div class="main-box-solo">
                <div class="main-title">차종</div>
                <div class="main-content">녹차</div>
                <div></div>
            </div>
            <hr>
            <div class="main-box-solo">
                <div class="main-title">차번호</div>
                <div class="main-content">녹차 2313</div>
                <div></div>
            </div>
            <hr>
            </div>
            <div class="end">
            <button type="submit" class="yes">확인</button>
            <a href="{{ route('reserve') }}">취소</a>
        </div>
        </div>
    </form>
@endsection