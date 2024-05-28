// 미디어 쿼리

function changeId() {
    if(window.matchMedia("(min-width: 1612px)").matches) {
        // 햄버거 아이콘 아이디 생성
        const idHam = document.querySelector('.fa-bars');
        idHam.setAttribute('id','hamburger');

        // 햄버거 버튼 클릭 이벤트 
        function openham (){
            // 부모 클래스 정의
            const container = document.querySelector('.nav-container');
            // 자식 클래스 정의
            const nav = document.querySelector('#nav');
            const cancel = document.querySelector('.fa-x');
            const ham = document.querySelector('.fa-bars');

            // x 아이콘 아이디 제거
            cancel.removeAttribute('id');
            // 햄버거 아이콘 아이디 추가 + css 추가
            ham.setAttribute('id','hamburger');

            nav.classList.toggle('nav2');
            // nav.classList.remove('nav');
            // 새 메뉴 클래스 추가
            // nav.classList.add('nav2');

            // 햄버거 아이콘 css 제거
            ham.classList.remove('hamburger');
            
            // x 아이콘 css 추가
            cancel.classList.add('cancel');

            // 새 메뉴 css 적용
            // nav.setAttribute('class', 'nav2');
            container.appendChild(nav);
        }

        const ham = document.querySelector('.fa-bars');
        ham.addEventListener('click', openham);

        // X 버튼 클릭 이벤트
        function closeham (){
            // 부모 클래스 정의
            const container = document.querySelector('.nav-container');
            // 자식 클래스 정의
            const nav = document.querySelector('#nav');
            const cancel = document.querySelector('.fa-x');
            const ham = document.querySelector('.fa-bars');
        
            // 햄버거 아이콘 아이디 제거
            ham.setAttribute('id', 'hamburger'); 
        
            nav.classList.toggle('nav2');
            // 기존 메뉴 클래스 제거
            // nav.classList.add('nav');
            // 새 메뉴 클래스 추가
            // nav.classList.remove('nav2');
        
            // 햄버거 아이콘 css 추가
            ham.classList.add('hamburger');
        
            // x 아이콘 보이는 css 제거
            cancel.classList.remove('cancel');
            
            // 메뉴바 안보이게 css 적용
            // nav.setAttribute('class', 'nav');
            container.appendChild(nav);
        }
        const cancel = document.querySelector('.fa-x');
        cancel.addEventListener('click', closeham);

    } else if(window.matchMedia("(max-width: 1611px)").matches) {
        // 햄버거 아이콘 아이디 제거
        const idHam = document.querySelector('.fa-bars');
        idHam.removeAttribute('id');

        // X 버튼 클릭 이벤트
        function closeham (){
            // 부모 클래스 정의
            const container = document.querySelector('.nav-container');
            // 자식 클래스 정의
            const nav = document.querySelector('#nav');
            const cancel = document.querySelector('.fa-x');
            const ham = document.querySelector('.fa-bars');
        
            // 햄버거 아이콘 아이디 제거
            ham.removeAttribute('id');
            // x 아이콘 아이디 추가 + css 추가
            cancel.setAttribute('id', 'cancel');
        
            nav.classList.toggle('nav2');
            // 기존 메뉴 클래스 제거
            // nav.classList.add('nav');
            // 새 메뉴 클래스 추가
            // nav.classList.remove('nav2');
        
            // 햄버거 아이콘 css 추가
            ham.classList.add('hamburger');
        
            // x 아이콘 보이는 css 제거
            cancel.classList.remove('cancel');
        
            // 메뉴바 안보이게 css 적용
            // nav.setAttribute('class', 'nav');
            container.appendChild(nav);
        }
        const cancel = document.querySelector('.fa-x');
        cancel.addEventListener('click', closeham);
    }
}
window.addEventListener('resize', changeId);