const mobileMenuBtn = document.querySelector('.mobile-menu-button')
const mobileMenu = document.querySelector('.mobile-menu')
const mobileCart = document.querySelector('.mobile-cart')
mobileMenuBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden')
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
