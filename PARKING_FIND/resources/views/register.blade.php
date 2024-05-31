@extends('inc.layout')

@section('privateCSS')
    <link rel="stylesheet" href="/css/register.css">
@endsection

@section('script')
    <script src="/js/register.js" defer></script>
@endsection

@section('main')
    <form action="{{ route('register.post') }}" method="POST">
        {{-- 에러 메세지 표시 --}}
        @if($errors->any())
            <div class="error">
                {{-- 에러 메세지 루프 처리 --}}
                @foreach ($errors->all() as $error)
                    <span>{{$error}}</span>
                    <br>
                @endforeach
            </div>
        @endif
        @csrf
        <div class="container">
            <h2>회원가입</h2>
            <div class="main-box">
                <hr>
                <div class="main-box-solo">
                    <label class="main-title">아이디</label>
                    <input type="text" name="account" id="account" class="main-content"></input>
                    <button type="button" class="main-button" id="account-chk">중복체크</button>
                    <span id="print-chk-account"></span>
                </div>
                <hr>
                <div class="main-box-solo">
                    <label class="main-title">비밀번호</label>
                    <input type="password" name="password" class="main-content" autoComplete="off"></input>
                </div>
                <hr>
                <div class="main-box-solo">
                    <label class="main-title">비밀번호 확인</label>
                    <input type="password" name="password_chk" class="main-content" autoComplete="off"></input>
                </div>
                <hr>
                <div class="main-box-solo">
                    <label class="main-title">이름</label>
                    <input type="text" name="name" class="main-content" autoComplete="off" ></input>
                </div>
                <hr>
                <div class="main-box-solo">
                    <label class="main-title">휴대전화</label>
                    <input type="text" name="phonenum" class="main-content" placeholder="숫자만 입력해주세요" autoComplete="off" ></input>
                </div>
                <hr>
                <div class="main-box-solo">
                    <label class="main-title">차종</label>
                    <input type="text" name="car" class="main-content" autoComplete="off" ></input>
                </div>
                <hr>
                <div class="main-box-solo">
                    <label class="main-title">차번호</label>
                    <input type="text" name="carnum" class="main-content" autoComplete="off" ></input>
                </div>
                <hr>
                <div class="end">
                    <button type="submit" class="yes" id="complete">확인</button>
                    <a href="{{ route('reserve') }}" class="no">취소</a>
                </div>
            </div>
        </div>
    </form>
@endsection