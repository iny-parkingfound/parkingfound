const btnNext1 = document.querySelector('#btnNext1');


btnNext1.addEventListener('click', clickBtnNext1);


function clickBtnNext1() {
    // 서브 메인
    const reservationMain1 = document.querySelector('#reservationMain1');
    const reservationMain2 = document.querySelector('#reservationMain2');

    reservationMain1.classList.add('my-display-none');
    reservationMain2.classList.remove('my-display-none');


    // 서브 버튼
    const sub1 = document.querySelector('#sub1');
    const sub2 = document.querySelector('#sub2');
    
    sub1.classList = 'sub';
    sub2.classList = 'main';
}