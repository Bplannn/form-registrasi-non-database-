function showLogin() {
    document.getElementById("form-choice").style.display = "none";
    window.location.href = 'login.html';
}

function showRegister() {
    document.getElementById("form-choice").style.display = "none";
    window.location.href = 'register.html';
}

function showChoice() {
    document.getElementById('form-choice').style.display = 'block';
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'none';
}