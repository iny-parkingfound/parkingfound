// 미디어 쿼리

function changeNav() {
    if(window.matchMedia("(min-width: 1612px)").matches) {
        // 햄버거 아이콘 아이디 생성
        const idHam = document.querySelector('.iconham');
        idHam.setAttribute('id','hamburger');
        // 스크린 크기 조절했을때 사라진 햄버거 클래스 추가
        idHam.classList.add('hamburger');

        // 스크린 크기 조절했을때 X 아이콘 제거
        const cancel = document.querySelector('.iconx');
        cancel.setAttribute('id', 'cancel');

        // 스크린 크기 조절했을때 nav 클래스명 변경
        const nav = document.querySelector('#nav');
        nav.classList.add('nav');
        nav.classList.remove('nav2');

    } else if(window.matchMedia("(max-width: 1611px)").matches) {
        // 햄버거 아이콘 아이디 제거
        const idHam = document.querySelector('.iconham');
        idHam.removeAttribute('id');
        // idHam.setAttribute('id','hamburger');

        // 햄버거 버튼 클릭 이벤트 
        function openham (){
            // 부모 클래스 정의
            const container = document.querySelector('.nav-container');
            // 자식 클래스 정의
            const nav = document.querySelector('#nav');
            const cancel = document.querySelector('.iconx');
            const ham = document.querySelector('.iconham');

            // x 아이콘 아이디 제거
            cancel.removeAttribute('id');
            // 햄버거 아이콘 아이디 추가 + css 추가
            ham.setAttribute('id','hamburger');

            nav.classList.remove('nav');
            // nav.removeAttribute('class', 'nav');
            // 새 메뉴 클래스 추가
            nav.classList.add('nav2');
            // nav.setAttribute('class', 'nav2');
            // nav.classList.toggle('nav2');

            // 햄버거 아이콘 css 제거
            ham.classList.remove('hamburger');
            
            // x 아이콘 css 추가
            cancel.classList.add('cancel');

            // 새 메뉴 css 적용
            nav.setAttribute('class', 'nav2');
            container.appendChild(nav);
        }

        const ham = document.querySelector('.iconham');
        ham.addEventListener('click', openham);

        // X 버튼 클릭 이벤트
        function closeham (){
            // 부모 클래스 정의
            const container = document.querySelector('.nav-container');
            // 자식 클래스 정의
            const nav = document.querySelector('#nav');
            const cancel = document.querySelector('.iconx');
            const ham = document.querySelector('.iconham');
        
            // 햄버거 아이콘 아이디 제거
            ham.removeAttribute('id');
            // x 아이콘 아이디 추가 + css 추가
            cancel.setAttribute('id', 'cancel');
        
            // 기존 메뉴 클래스 제거
            nav.classList.add('nav');
            // 새 메뉴 클래스 추가
            nav.classList.remove('nav2');
            // nav.classList.toggle('nav2');
        
            // 햄버거 아이콘 css 추가
            ham.classList.add('hamburger');
        
            // x 아이콘 보이는 css 제거
            cancel.classList.remove('cancel');
        
            // 메뉴바 안보이게 css 적용
            nav.setAttribute('class', 'nav');
            container.appendChild(nav);
        }
        const cancel = document.querySelector('.iconx');
        cancel.addEventListener('click', closeham);
    }
}
window.addEventListener('resize', changeNav);

// 즉시 실행함수 이용해서 스크린 크기에 따라 햄버거 id 제거
(() => {
    const hamburger = document.querySelector('#hamburger');

    if(hamburger && window.innerWidth <= 1611) {
        hamburger.removeAttribute('id');
    }
})();

// 미디어 쿼리 없을때 함수 실행
// 햄버거 버튼 클릭 이벤트 
function openham (){
    // 부모 클래스 정의
    const container = document.querySelector('.nav-container');
    // 자식 클래스 정의
    const nav = document.querySelector('#nav');
    const cancel = document.querySelector('.iconx');
    const ham = document.querySelector('.iconham');

    // x 아이콘 아이디 제거
    cancel.removeAttribute('id');
    // 햄버거 아이콘 아이디 추가 + css 추가
    ham.setAttribute('id','hamburger');

    nav.classList.remove('nav');
    // nav.removeAttribute('class', 'nav');
    // 새 메뉴 클래스 추가
    nav.classList.add('nav2');
    // nav.setAttribute('class', 'nav2');
    // nav.classList.toggle('nav2');

    // 햄버거 아이콘 css 제거
    ham.classList.remove('hamburger');
    
    // x 아이콘 css 추가
    cancel.classList.add('cancel');

    // 새 메뉴 css 적용
    nav.setAttribute('class', 'nav2');
    container.appendChild(nav);
}

const ham = document.querySelector('.iconham');
ham.addEventListener('click', openham);

// X 버튼 클릭 이벤트
function closeham (){
    // 부모 클래스 정의
    const container = document.querySelector('.nav-container');
    // 자식 클래스 정의
    const nav = document.querySelector('#nav');
    const cancel = document.querySelector('.iconx');
    const ham = document.querySelector('.iconham');

    // 햄버거 아이콘 아이디 제거
    ham.removeAttribute('id');
    // x 아이콘 아이디 추가 + css 추가
    cancel.setAttribute('id', 'cancel');

    // 기존 메뉴 클래스 제거
    nav.classList.add('nav');
    // 새 메뉴 클래스 추가
    nav.classList.remove('nav2');
    // nav.classList.toggle('nav2');

    // 햄버거 아이콘 css 추가
    ham.classList.add('hamburger');

    // x 아이콘 보이는 css 제거
    cancel.classList.remove('cancel');

    // 메뉴바 안보이게 css 적용
    nav.setAttribute('class', 'nav');
    container.appendChild(nav);
}
const cancel = document.querySelector('.iconx');
cancel.addEventListener('click', closeham);