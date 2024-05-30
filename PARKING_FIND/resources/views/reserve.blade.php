@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/reserve.css">
@endsection

@section('main')
<form action="reserve" method="post">
<div class="container">
    <div class="sub-title">
        <h3>예약 조회</h3>
        <a class="sub-title-sub" href="{{ route('update') }}">내 정보 변경</a>
        <a class="sub-title-sub" href="{{ route('question') }}">회원 탈퇴</a>
    </div>
    <div class="main-title">
        <div class="main-main">
            <img class="man" src="img/man.png">
            <h2>이현수님 안녕하세요.</h2>
        </div>
        <h2 class="start">예약 조회</h2>
        <div class="reserve-box">
            <div class="reserve-number">예약번호 2132313</div>
            <div class="reserve-day">예약 일자 2024-05-10</div>
        </div>
        <div class="reserve-main-box">
            <img class="reserve-main-man" src="img/man.png">
            <h4 class="parkingnumber">22주차장</h4>
            <div class="height">
            <div class="parkingday">2023-05-10 17:00:00 ~ 2023-05-10 19:00:00</div>
            <div class="car">녹차 23가7213</div>
            <button type="submit" class="cancel1">예약 취소</button>
        </div>
        </div>
        <div class="reserve-box">
            <div class="reserve-number">예약번호 2132313</div>
            <div class="reserve-day">예약 일자 2024-05-10</div>
        </div>
        <div class="reserve-main-box">
            <img class="reserve-main-man" src="img/man.png">
            <h4 class="parkingnumber">22주차장</h4>
            <div class="height">
            <div class="parkingday">2023-05-10 17:00:00 ~ 2023-05-10 19:00:00</div>
            <div class="car">녹차 23가7213</div>
            <button type="submit" class="cancel1">예약 취소</button>
        </div>
        </div>
        <div class="reserve-box">
            <div class="reserve-number">예약번호 2132313</div>
            <div class="reserve-day">예약 일자 2024-05-10</div>
        </div>
        <div class="reserve-main-box">
            <img class="reserve-main-man" src="img/man.png">
            <h4 class="parkingnumber">22주차장</h4>
            <div class="height">
            <div class="parkingday">2023-05-10 17:00:00 ~ 2023-05-10 19:00:00</div>
            <div class="car">녹차 23가7213</div>
            <button type="submit" class="cancel1">예약 취소</button>
        </div>
        </div>
        <div class="reserve-box">
            <div class="reserve-number">예약번호 2132313</div>
            <div class="reserve-day">예약 일자 2024-05-10</div>
        </div>
        <div class="reserve-main-box">
            <img class="reserve-main-man" src="img/man.png">
            <h4 class="parkingnumber">22주차장</h4>
            <div class="height">
            <div class="parkingday">2023-05-10 17:00:00 ~ 2023-05-10 19:00:00</div>
            <div class="car">녹차 23가7213</div>
            <button type="submit" class="cancel1">예약 취소</button>
        </div>
        </div>
        <div class="number-container">
            <img class="number" src="img/그룹 14.png">
            <div class="number">1</div>
            <div class="number">2</div>
            <div class="number">3</div>
            <div class="number">4</div>
            <div class="number">5</div>
            <img class="number" src="img/그룹 7.png">
        </div>
    </div>
</div>
</form>
@endsection