

const toRegis=document.getElementById('toRegis')
const toLogin=document.getElementById('toLogin')
const login_btn=document.getElementById('login_btn')
const register_btn=document.getElementById('register_btn')

const profile_div=document.getElementById('profile')
const login_div=document.getElementById('login')

console.log(login_btn)

if(toRegis){
    toRegis.addEventListener('click', ()=>toggleForms(true))
}
if(toLogin){
    toLogin.addEventListener('click', ()=>toggleForms(false))
}
if(login_btn){
    login_btn.addEventListener('click', ()=>Login())
}
if(register_btn){
    register_btn.addEventListener('click', ()=>register())
}   


//from login to register, from register to login
function toggleForms(isLogin) {
    const forms = document.getElementById('forms');
    if (isLogin) {
        forms.style.transform = 'translateX(-50%)'; /* Переход на правую сторону к форме регистрации*/
    } else {
        forms.style.transform = 'translateX(0)'; /* Возврат к форме входа */
    }
    isLogin = !isLogin;
}
//link to index.html, when logined
function Login() {
    console.log('click')
    // window.location.href = "index.html";
}
//link to index.html, when registered
function register(){
    window.location.href = "index.html";
}