
const mobileMenuBtn = document.querySelector('.mobile-menu-button')
const mobileMenu = document.querySelector('.mobile-menu')
const mobileCart = document.querySelector('.mobile-cart')
mobileMenuBtn.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden')
})  