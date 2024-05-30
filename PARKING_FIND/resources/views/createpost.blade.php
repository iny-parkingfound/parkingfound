@extends('inc.layout')

@section('privateCSS')
<link rel="stylesheet" href="/css/createpost.css">
@endsection

@section('main')
<form action="createpost" method="post">
<div class="container">
    <h2>문의 작성</h2>
    <hr>
        <select>
            <option>문의 유형을 선택해주세요.</option>
        </select>
    
    <div class="main-text">
        <textarea class="text-box" type="text" id="text-box" placeholder="접수된 문의를 순차적으로 답변을 드리고 있습니다.">
    </textarea>
    <div class="button-st">
    <button type="submit" class="start">작성하기</button>
    <a class="end" href="{{ route('question') }}">취소</a>
</div>
</div> 
</form>
@endsection