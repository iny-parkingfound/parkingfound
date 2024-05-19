function openham (){
    // 부모 클래스 정의
    const container = document.querySelector('.nav-container');
    // 자식 클래스 정의
    const nav = document.querySelector('.nav');
    const cancel = document.querySelector('.cancel-remove');
    const ham = document.querySelector('.hamburger');

    // x 아이콘 아이디 제거
    cancel.removeAttribute('id');
    // 햄버거 아이콘 아이디 추가 + css 추가
    ham.setAttribute('id','hamburger');

    // 햄버거 아이콘 css 제거
    ham.classList.remove('hamburger');
    // 햄버거 아이콘 제거
    ham.classList.add('hamburger-remove');
    
    // x 아이콘 생성
    cancel.classList.remove('cancel-remove');
    // x 아이콘 css 추가
    cancel.classList.add('cancel');

    // 기존 메뉴 클래스 제거
    nav.classList.remove('nav');
    // 새 메뉴 클래스 추가
    nav.classList.add('nav2');

    // 새 메뉴 css 적용
    nav.setAttribute('class', 'nav2');
    container.appendChild(nav);
}

function closeham (){
    const container = document.querySelector('.nav-container');
    const nav = document.querySelector('.nav2');
    const cancel = document.querySelector('.cancel');
    const ham = document.querySelector('.hamburger-remove');
    ham.removeAttribute('id');
    cancel.setAttribute('id', 'cancel');
    ham.classList.add('hamburger');
    ham.classList.remove('hamburger-remove');
    cancel.classList.add('cancel-remove');
    cancel.classList.remove('cancel');
    nav.classList.add('nav');
    nav.classList.remove('nav2');
    nav.setAttribute('class', 'nav');
    container.appendChild(nav);

}

const ham = document.querySelector('.hamburger');
ham.addEventListener('click', openham);

const cancel = document.querySelector('#cancel');
cancel.addEventListener('click', closeham);