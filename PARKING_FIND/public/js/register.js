document.querySelector('#account-chk').addEventListener('click', accountChk);
async function accountChk() {
    try {
        console.log('자바스크립트 연결 확인')
        const account = document.querySelector('#account').value;
        const url = '/user/chk';

        // form 생성
        const form = new FormData();
        form.append('account', account);

        // ajax 처리
        const response = await axios.post(url, form)

        const complete = document.querySelector('#complete');
        const printChkaccount = document.querySelector('#print-chk-account')
        printChkaccount.innerHTML = '';

        // 정상 처리
        if(response.data.accountFlg) {
            // 중복 이메일
            printChkaccount.innerHTML = '사용불가';
            complete.setAttribute('disabled', 'disabled');
        } else {
            // 사용가능 이메일
            printChkaccount.innerHTML = '사용가능';
            complete.removeAttribute('disabled');
        }
        
    } catch (error) {
        console.log(error);
        alert('회원 가입 실패');
    }
}