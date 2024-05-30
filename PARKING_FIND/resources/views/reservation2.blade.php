@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/reservation2.css">
@endsection

@section('main')
<main>
    <div class="container">
        <div class="main-head">
            <div id="sub1" class="sub">예약 동의</div>
            <img src="/img/그룹 7.png" class="icon">
            <div id="sub2" class="main">예약 신청</div>
            <img src="/img/그룹 7.png" class="icon">
            <div id="sub3" class="sub">예약 확인</div>
        </div>
    </div>
    <form action="/reservation/3" method="post">
        @csrf
        <div class="container">
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
            </div>
            <h3 class="h3-all">주차 시간 선택</h3>
            <div class="sub-one-box">
                <div class="time">입차 일자</div>
                <form>
                    <select>
                        <option>예시</option>
                    </select>
                </form>
                <div class="time">출차 일자</div>
                <form>
                    <select>
                        <option>예시</option>
                    </select>
                </form>
            </div>
            <h3 class="h3-all">주차 예약 보증료 선 결제</h3>
            <div class="sub-two-box">
                <div class="total">주차 예상 요금</div>
                <div class="money">11,000</div>
                <div class="total">예약 보증금</div>
                <div class="money">1,000</div>
            </div>
            <h3 class="h3-all">취소 및 미입차 시 수수료 부과기준</h3>
            <table>
                <thead>
                    <tr>
                        <th colspan="2">구분</th>
                        <th>예약 취소 수수료</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text" rowspan="3">예약취소</td>
                        <td>입차 예정시간 1시간 전</td>
                        <td>없음</td>
                    </tr>
                    <tr>
                        <td>입차 예정시간 전 예약 후 20분이내 취소시</td>
                        <td>없음</td>
                    </tr>
                    <tr>
                        <td>입차 예정시간 1시간전 ~ 입차 예정시간 2시간 경과까지</td>
                        <td>예약 보증금의 50%</td>
                    </tr>
                </tbody>
                <tfoot>
                    <td class="text">예약부도(N-show)</td>
                    <td>입차 예정시간 2시간 이후</td>
                    <td>예약보증금의 100%</td>
                </tfoot>
            </table>
            <p>※ 예약보증금 및 주차요금</p>
            <p>-예약보증금: 10,000원</p>
            <p>-정상산방법 : 예약주차장을 이용한 차량은 주차요금만 부과되며, 예약보증금은 환불조치 됨 (단, 수수료 발생 시 수수료 제외 금액 환불)</p>
            <div class="chk">
            <input type="checkbox" name="cancel" id="cancel">
            <label for="cancel">예약 취소 또는 예약 부도(미입차) 시 예약 취소 수수료가 부과됨을 확인하였습니다.</label>
            </div>
            <button type="submit" class="nextbutton">다음단계</button>
        </div>

        {{-- 이전 페이지 데이터 --}}
        <input type="hidden" name="agree" value="{{ '동의 값 넣기' }}">
    </form>
</main>
@endsection