const toRegis = document.getElementById('toRegis');
const login_btn = document.getElementById('login_btn');
const toLogin = document.getElementById('toLogin');
const regis_btn = document.getElementById('regis_btn');

// Toggle Forms
if (toRegis && toLogin) {
    toRegis.addEventListener('click', () => toggleForms(true));
    toLogin.addEventListener('click', () => toggleForms(false));
}

function toggleForms(isRegister) {
    const forms = document.getElementById('forms');
    forms.style.transform = isRegister ? 'translateX(-50%)' : 'translateX(0)';
}
window.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    console.log(params.get('isLogin'))
    if(params.get('isLogin')) toggleForms(false);
    else toggleForms(true);
});
// Register
function Register(event) {
    event.preventDefault();
    const name = document.getElementById('register-name').value;
    const email = document.getElementById('register-email').value;
    const password = document.getElementById('register-password').value;

    if (!validateForm({ name, email, password })) return;

    $.ajax({
        url: 'register.php',
        method: 'POST',
        data: { name, email, password },
        success: (response) => {
            const data = JSON.parse(response);
            alert(data.message);
            if (data.success) window.location.href = 'index.php';
        },
        error: () => alert('An error occurred during registration.')
    });
}

// Login
function Login(event) {
    event.preventDefault();
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;

    if (!validateForm({ email, password })) return;

    $.ajax({
        url: 'login.php',
        method: 'POST',
        data: { email, password },
        success: (response) => {
            const data = JSON.parse(response);
            alert(data.message);
            if (data.success) window.location.href = 'index.php';
        },
        error: () => alert('An error occurred during login.')
    });
}

function validateForm(fields) {
    for (const [key, value] of Object.entries(fields)) {
        if (!value) {
            alert(`${key} is required`);
            return false;
        }
    }
    return true;
}

login_btn.addEventListener('click', Login);
regis_btn.addEventListener('click', Register);
