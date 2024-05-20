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
    // 부모 클래스 정의
    const container = document.querySelector('.nav-container');
    // 자식 클래스 정의
    const nav = document.querySelector('.nav2');
    const cancel = document.querySelector('.cancel');
    const ham = document.querySelector('.hamburger-remove');

    // 햄버거 아이콘 아이디 제거
    ham.removeAttribute('id');
    // x 아이콘 아이디 추가 + css 추가
    cancel.setAttribute('id', 'cancel');

    // 햄버거 아이콘 css 추가
    ham.classList.add('hamburger');
    // 햄버거 아이콘 안보이게 css 삭제
    ham.classList.remove('hamburger-remove');

    // x 아이콘 안보이게 추가
    cancel.classList.add('cancel-remove');
    // x 아이콘 보이는 css 제거
    cancel.classList.remove('cancel');
    
    // 기존 메뉴 클래스 제거
    nav.classList.add('nav');
    // 새 메뉴 클래스 추가
    nav.classList.remove('nav2');

    // 메뉴 안보이게 css 적용
    nav.setAttribute('class', 'nav');
    container.appendChild(nav);
}

const ham = document.querySelector('.hamburger');
ham.addEventListener('click', openham);

const cancel = document.querySelector('#cancel');
cancel.addEventListener('click', closeham);