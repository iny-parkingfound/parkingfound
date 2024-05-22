// 미디어 쿼리
// const mediaQuery = '(min-width: 1612px)';
// const mediaQueryList = window.matchMedia(mediaQuery);

function changeId() {
    if(window.matchMedia("(min-width: 1612px)").matches) {
        // 햄버거 아이콘 아이디 생성
        const idHam = document.querySelector('.fa-bars');
        idHam.setAttribute('id','hamburger');

        // function cangeclass() {

        // }
        // const cancel = document.querySelector('.fa-x');
        // cancel.addEventListener('click', cangeclass);

    } else if(window.matchMedia("(max-width: 1611px)").matches) {
        // 햄버거 아이콘 아이디 제거
        const idHam = document.querySelector('.fa-bars');
        idHam.removeAttribute('id');
    }
}
window.addEventListener('resize', changeId)

// 햄버거 버튼 클릭 이벤트 
function openham (){
    // 부모 클래스 정의
    const container = document.querySelector('.nav-container');
    // 자식 클래스 정의
    const nav = document.querySelector('.nav');
    const cancel = document.querySelector('.fa-x');
    const ham = document.querySelector('.fa-bars');

    // x 아이콘 아이디 제거
    cancel.removeAttribute('id');
    // 햄버거 아이콘 아이디 추가 + css 추가
    ham.setAttribute('id','hamburger');

    nav.classList.remove('nav');
    // 새 메뉴 클래스 추가
    nav.classList.add('nav2');

    // 햄버거 아이콘 css 제거
    ham.classList.remove('hamburger');
    // 햄버거 아이콘 제거
    // ham.classList.add('hamburger-remove');
    
    // x 아이콘 생성
    cancel.classList.remove('cancel-remove');
    // x 아이콘 css 추가
    cancel.classList.add('cancel');

    // 기존 메뉴 클래스 제거

    // 새 메뉴 css 적용
    nav.setAttribute('class', 'nav2');
    container.appendChild(nav);
}

function closeham (){
    // 부모 클래스 정의
    const container = document.querySelector('.nav-container');
    // 자식 클래스 정의
    const nav = document.querySelector('.nav2');
    const cancel = document.querySelector('.fa-x');
    const ham = document.querySelector('.fa-bars');

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
    // 햄버거 아이콘 안보이게 css 삭제
    // ham.classList.remove('hamburger-remove');

    // x 아이콘 안보이게 추가
    cancel.classList.add('cancel-remove');
    // x 아이콘 보이는 css 제거
    cancel.classList.remove('cancel');
    

    // 메뉴 안보이게 css 적용
    nav.setAttribute('class', 'nav');
    container.appendChild(nav);
}

const ham = document.querySelector('.fa-bars');
ham.addEventListener('click', openham);

const cancel = document.querySelector('.fa-x');
cancel.addEventListener('click', closeham);
