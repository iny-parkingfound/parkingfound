// 즉시 실행함수 이용해서 스크린 크기에 따라 햄버거 id 제거
(() => {
    const hamburger = document.querySelector('#hamburger');

    if(hamburger && window.innerWidth <= 1611) {
        hamburger.removeAttribute('id');
    }
})();

// 부모 클래스 정의
const container = document.querySelector('.nav-container');
// 자식 클래스 정의
const nav = document.querySelector('#nav');
const cancel = document.querySelector('.iconx');
const ham = document.querySelector('.iconham');

// 미디어 쿼리
function changeNav() {
    // const idHam = document.querySelector('.iconham');
    if(window.matchMedia("(min-width: 1612px)").matches) {
        // 햄버거 아이콘 아이디 생성
        ham.setAttribute('id','hamburger');

        // 스크린 크기 조절했을때 사라진 햄버거 클래스 추가
        ham.classList.add('hamburger');

        // 스크린 크기 조절했을때 X 아이콘 제거
        cancel.setAttribute('id', 'cancel');

        // 스크린 크기 조절했을때 nav 클래스명 변경
        nav.classList.add('nav');
        nav.classList.remove('nav2');

    } else if(window.matchMedia("(max-width: 1611px)").matches) {
        // 햄버거 아이콘 아이디 제거
        ham.removeAttribute('id');
    }
}
window.addEventListener('resize', changeNav);

// 미디어 쿼리 없을때 함수 실행
// 햄버거 버튼 클릭 이벤트 
function openham (){
    // x 아이콘 아이디 제거
    cancel.removeAttribute('id');
    // 햄버거 아이콘 아이디 추가 + css 추가
    ham.setAttribute('id','hamburger');

    nav.classList.remove('nav');

    // 새 메뉴 클래스 추가
    nav.classList.add('nav2');

    // 햄버거 아이콘 css 제거
    ham.classList.remove('hamburger');
    
    // x 아이콘 css 추가
    cancel.classList.add('cancel');

    // 새 메뉴 css 적용
    nav.setAttribute('class', 'nav2');
    container.appendChild(nav);
   
    // function changeNav2() {
    //     if(window.matchMedia("(max-width: 1611px)").matches) {
    //         // 햄버거 아이콘 아이디 생성
    //         ham.setAttribute('id', 'hamburger');
    //     } else if(window.matchMedia("(min-width: 1612px)").matches) {
    //         // ham.removeAttribute('id');
    //     }
    // }
    // window.addEventListener('resize', changeNav2);
}

ham.addEventListener('click', openham);

// X 버튼 클릭 이벤트
function closeham (){
    // 햄버거 아이콘 아이디 제거
    ham.removeAttribute('id');
    // x 아이콘 아이디 추가 + css 추가
    cancel.setAttribute('id', 'cancel');

    // 기존 메뉴 클래스 제거
    nav.classList.add('nav');

    // 새 메뉴 클래스 추가
    nav.classList.remove('nav2');

    // 햄버거 아이콘 css 추가
    ham.classList.add('hamburger');

    // x 아이콘 보이는 css 제거
    cancel.classList.remove('cancel');

    // 메뉴바 안보이게 css 적용
    nav.setAttribute('class', 'nav');
    container.appendChild(nav);
}
cancel.addEventListener('click', closeham);