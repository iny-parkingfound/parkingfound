@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/reservation3.css">
@endsection

@section('main')
<main>
    <form action="/reservation" method="post">
        @csrf
        <div class="container">
            <div class="main-head">
                <div id="sub1" class="sub">예약 동의</div>
                <img src="/img/그룹 7.png" class="icon">
                <div id="sub2" class="sub">예약 신청</div>
                <img src="/img/그룹 7.png" class="icon">
                <div id="sub3" class="main">예약 확인</div>
            </div>
            <h2>주차 예약</h2>
            <div class="main-box">
                <div class="main-box-name-title">
                    <h3 class="main-box-name">주차장</h3>
                    <div class="main-box-title">자동입력</div>
                </div>
                <div class="main-box-name-title">
                    <h3 class="main-box-name">이름</h3>
                    <div class="main-box-title">자동입력</div>
                </div>
                <div class="main-box-name-title">
                    <h3 class="main-box-name">전화번호</h3>
                    <div class="main-box-title">자동입력</div>
                </div>
                <div class="main-box-name-title">
                    <h3 class="main-box-name">차 종</h3>
                    <div class="main-box-title">자동입력</div>
                </div>
                <div class="main-box-name-title">
                    <h3 class="main-box-name">차량 번호</h3>
                    <div class="main-box-title">자동입력</div>
                </div>
                <div class="main-box-name-title">
                    <h3 class="main-box-name">결제 금액</h3>
                    <div class="main-box-title">자동입력</div>
                </div>
            </div>
            <button type="submit" class="nextbutton">확인</button>
        </div>

        
        {{-- 이전 페이지 데이터 --}}
        <input type="hidden" name="agree" value="{{ '동의 값 넣기' }}">
    </form>
</main>
@endsection