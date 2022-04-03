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

if (forgotPasswordLink) {
  forgotPasswordLink.addEventListener('click', () => {
    loginForm.classList.add('hidden')
    forgotPasswordForm.classList.remove('hidden')
  })
}
if (loginHereLink) {
  loginHereLink.addEventListener('click', () => {
    loginForm.classList.remove('hidden')
    loginForm.classList.add('flex')
    forgotPasswordForm.classList.add('hidden')
  })
}
// 
const refineOpenMenuBtn = document.querySelector('.refine-open-menu')
const refineCloseMenuBtn = document.querySelector('.refine-close-menu')
const refineMenu = document.querySelector('.refine-menu')
refineOpenMenuBtn.addEventListener('click', () => {
  refineMenu.classList.toggle('hidden')
})
refineCloseMenuBtn.addEventListener('click', () => {
  refineMenu.classList.toggle('hidden')
})
// ADMIN -> CATALOG -> SELECT
