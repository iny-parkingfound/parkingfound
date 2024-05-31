<header>
    <div class="nav-container">
        <a href="{{ route('index') }}">
            <img src="/img/image.png" class="header-title"></img>
        </a>
        <ul class="nav" id="nav">
            <li class="menu menu1"><a href="{{ route('index') }}">HOME</a></li>
            <li class="menu menu2"><a href="">주차장 검색</a></li>
            <li class="menu menu3"><a href="{{ route('reservation') }}">주차 예약</a></li>
            <li class="menu menu4"><a href="{{ route('question') }}">Q & A</a></li>
            <li class="profile"><a href="{{ route('reserve') }}">이현수님</a></li>
            <li class="profile-img"><a href="{{ route('reserve') }}"><img src="/img/0.png" class="profile-img2"></a></li>
        </ul>
    <img src="/img/ham2.png" class="iconham hamburger" id="hamburger">
    <img src="/img/x2.png" class="iconx" id="cancel">
    </div>
</header>