const passwordToggle = document.querySelector('.password-toggle');
const passwordInput = document.getElementById('exampleInputPassword');

passwordToggle.addEventListener('click', function () {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    this.children[0].classList.remove('fa-eye');
    this.children[0].classList.add('fa-eye-slash');
  } else {
    passwordInput.type = 'password';
    this.children[0].classList.remove('fa-eye-slash');
    this.children[0].classList.add('fa-eye');
  }
});
