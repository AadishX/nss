import './bootstrap';
document.addEventListener("DOMContentLoaded", function() {
    let buttons = document.querySelectorAll('.register-button');

    buttons.forEach(b => b.addEventListener('click', () => document.body.style.overflow = "hidden"));
});
