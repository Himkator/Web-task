var isLogin = true;
function toggleForms() {
    const forms = document.getElementById('forms');
    if (isLogin) {
        forms.style.transform = 'translateX(-50%)'; /* Переход на правую сторону к форме регистрации*/
    } else {
        forms.style.transform = 'translateX(0)'; /* Возврат к форме входа */
    }
    isLogin = !isLogin;
}
function Login() { /* при нажатий на кнопку перекидывает на индекс*/ 
    window.location.href = "index.html";
    
}
function redirectToLoginPage() {
    window.location.href = "Login Register.html"; // Это функция на джаваскрипте
    // для переброски пользователя на страницу регистраций и входа при нажатий на иконку 
}
