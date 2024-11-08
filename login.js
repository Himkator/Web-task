const toRegis=document.getElementById('toRegis')
const login_btn=document.getElementById('login_btn')

const toLogin=document.getElementById('toLogin')
const regis_btn=document.getElementById('regis_btn')
if(toRegis && toLogin){
    toRegis.addEventListener('click', ()=>toggleForms(true))
    toLogin.addEventListener('click', ()=>toggleForms(false))
}
if(login_btn && regis_btn){
    login_btn.addEventListener('click', ()=>Login())
    regis_btn.addEventListener('click', ()=>Register())
}

window.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    console.log(params.get('isLogin'))
    if(params.get('isLogin')) toggleForms(true);
});

function toggleForms(isLogin) {
    const forms = document.getElementById('forms');
    if (isLogin) {
        forms.style.transform = 'translateX(-50%)'; /* Переход на правую сторону к форме регистрации*/
    } else {
        forms.style.transform = 'translateX(0)'; /* Возврат к форме входа */
    }
    isLogin = !isLogin;
}


function Login() { /* при нажатий на кнопку перекидывает на индекс*/ 
    window.location.href = "index.html?loggedIn=true";
}



function Register(){
    window.location.href = "index.html?loggedIn=true";
}

