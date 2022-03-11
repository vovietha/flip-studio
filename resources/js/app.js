const mobileOpenMenuBtn = document.querySelector('.mobile-open-menu')
const mobileCloseMenuBtn = document.querySelector('.mobile-close-menu')
const mobileMenu = document.querySelector('.mobile-menu')
const mobileCart = document.querySelector('.mobile-cart')
mobileOpenMenuBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden')
  mobileMenu.style.transform = "translateX(0%)"
})
mobileCloseMenuBtn.addEventListener('click', () => {
  mobileMenu.style.transform = "translateX(-100%)"
})
const forgotPasswordLink = document.querySelector('.forgot-password-link')
const loginForm = document.querySelector('.login-form')
const forgotPasswordForm = document.querySelector('.forgot-password-form')
const loginHereLink = document.querySelector('.login-here-link')

forgotPasswordLink.addEventListener('click', () => {
  loginForm.classList.add('hidden')
  forgotPasswordForm.classList.remove('hidden')
})
loginHereLink.addEventListener('click', () => {
  loginForm.classList.remove('hidden')
  loginForm.classList.add('flex')
  forgotPasswordForm.classList.add('hidden')
})

//Increase/Decrease Input
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
