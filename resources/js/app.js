import './bootstrap';
document.addEventListener("DOMContentLoaded", function() {
    let buttons = document.querySelectorAll('.register-button');
    let dialog = document.getElementById('registration-form');
    let dialogCloseButton = document.querySelector('.form-close');

    let alert = document.querySelector('.alert');
    let alertCloseButton = document.querySelector('.alert-close');

    buttons.forEach(b => b.addEventListener('click', () => {
        document.body.style.overflow = "hidden";
        document.getElementById("modal-backdrop").classList.add('modal-open');
        dialog.classList.add('open');
        dialog.showModal();
    }));

    dialogCloseButton.addEventListener('click', () => {
        document.body.removeAttribute('style');
        document.getElementById("modal-backdrop").classList.remove('modal-open');
        dialog.classList.remove('open');
        dialog.close();
    });

    dialog.addEventListener('close', () => {
        document.body.removeAttribute('style');
        document.getElementById("modal-backdrop").classList.remove('modal-open');
        dialog.classList.remove('open');
    })

    alertCloseButton.addEventListener('click', () => {
        alert.remove();
    })
});
