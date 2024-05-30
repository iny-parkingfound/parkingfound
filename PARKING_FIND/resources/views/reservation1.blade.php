@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/reservation1.css">
@endsection

@section('main')
<main>
    <div class="container">
        <div class="main-head">
            <div id="sub1" class="main">예약 동의</div>
            <img src="/img/그룹 7.png" class="icon">
            <div id="sub2" class="sub">예약 신청</div>
            <img src="/img/그룹 7.png" class="icon">
            <div id="sub3" class="sub">예약 확인</div>
        </div>
    </div>
    <form action="/reservation/2" method="post">
        @csrf
        <div id="reservationMain1" class="margin">
            <div class="main-text">
                <h2>예약 전 반드시 읽어주세요</h2>
                <h3>[예약 기간]</h3>
                <h4>・최소 2시간부터 최장 30일까지 예약이 가능합니다.</h4>
                <h3>[입차 시간]</h3>
                <h4>・예약시간 기준 2시간 전 및 예약시간 기준 2시간 후 까지는 예약변경 없이 입차가 가능합니다.</h4>
                <h3>[예약 변경/취소]</h3>
                <h4>・예약의 변경 및 취소는 입차 예정시간 1시간 전까지 가능합니다.</h4>
                <h4>・입차 예정시간 1시간 전 예약한 경우 20분이내에는 예약의 변경 및 취소가 가능합니다.</h4>
                <h3>[예약부도 및 패널티]</h3>
                <h4>・입차 예정시간 2시간 경과까지 입차하지 않는 경우 예약 보증금의 100%를 위약금으로 하며, 예약이 취소됩니다.</h4>
                <h4>・예약일 기준 1년간 2회 이상 예약부도 시 예약 출차일로부터 3개월 동안 공항 주차 예약서비스를 이용할 수 없습니다.</h4>
                <h3>[장애인 차량]</h3>
                <h4>・장애인 차량 주차면이 별도로 마련되어 있습니다.(엘리베이터 및 에스컬레이터 없음)</h4>
                <h3>[주차요금]</h3>
                <h4>・주차요금은 실제 입출차 시간을 기준으로 부과됩니다.</h4>
                <h4>・예약주차장 외 다른 주차장은 예약없이 이용 가능합니다.(이용 주차장 만차 시 대기 발생 참조)</h4>
                <h3>[할인적용]</h3>
                <h4>・할인은 출차(유인, 무인) 시 증빙 후 적용됩니다.</h4>
                <h4>(단, 정부에 등록된 차량(저공해, 경차, 국가유공상이자 등) 및 공사 홈페이지에 다자녀 사전 등록 차량은 자동 할인 가능)</h4>
            </div>
            <div class="container2">
                <div>
                    <label for="yes">동의</label>
                    <input type="radio" id="yes" name="agree" value="1">
                </div>
                <div class="zz">
                    <label class="radiono" for="no">동의하지않음</label>
                    <input type="radio" id="no" name="agree" value="2">
                </div>
                <button type="submit" class="nextbutton">다음단계</button>
            </div>
        </div>
    </form>
</main>
@endsection