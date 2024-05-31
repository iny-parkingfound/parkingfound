@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/question.css">
@endsection

@section('main')
<div class="container">
    <h2> Q & A</h2>
    <div class="main-head">
        <a class="nextbutton" href="{{ route('createpost') }}">글쓰기</a>
    </div>
    <div class="outer-container">
        <div class="main-container">
            <div class="main-title-head">
                <h3>번호</h3>
                <h3>제목</h3>
                <h3>글쓴이</h3>
                <h3>날짜</h3>
            </div>
            <div class="main-container">
                @foreach($boardData as $key => $item)
                    <div class="main-title">
                        <h3>{{$item->id}}</h3>
                        <h3>{{$item->title}}</h3>
                        <h3>{{$item->name}}</h3>
                        <h3>{{$item->created_at}}</h3>
                    </div>
                @endforeach
            </div>
            {{-- <div class="number-container">
                <img class="number" src="/img/그룹 14.png">
                <div class="number">1</div>
                <div class="number">2</div>
                <div class="number">3</div>
                <div class="number">4</div>
                <div class="number">5</div>
                <img class="number" src="/img/그룹 7.png">
            </div> --}}
        </div>
    </div>
    {{ $boardData->links() }}
</div>

@endsection