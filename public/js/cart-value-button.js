/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/cart-value-button.js ***!
  \*******************************************/
var increaseBtn = document.getElementById('cart-button-increase');
var decreaseBtn = document.getElementById('cart-button-decrease');
increaseBtn.addEventListener('click', function () {
  var value = parseInt(document.getElementById('cart-input-number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('cart-input-number').value = value;
});
decreaseBtn.addEventListener('click', function () {
  var value = parseInt(document.getElementById('cart-input-number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('cart-input-number').value = value;
}); // function increaseValue() {
//   const value = parseInt(document.getElementById('cart-input-number').value, 10);
//   value = isNaN(value) ? 0 : value;
//   value++;
//   document.getElementById('cart-input-number').value = value;
// }
// function decreaseValue() {
//   const value = parseInt(document.getElementById('cart-input-number').value, 10);
//   value = isNaN(value) ? 0 : value;
//   value < 1 ? value = 1 : '';
//   value--;
//   document.getElementById('cart-input-number').value = value;
// }
// $(document).ready(function () {
//   $('.cart-button-increase').click(function (e) {
//     e.preventDefault();
//     var inc_value = $('.cart-input-number').val();
//     var value = parseInt(inc_value, 10);
//     value = isNaN(value) ? 0 : value;
//     if (value < 10) {
//       value++;
//       $('.cart-input-number').val(value);
//     }
//   });
//   $('.cart-button-decrease').click(function (e) {
//     e.preventDefault();
//     var dec_value = $('.cart-input-number').val();
//     var value = parseInt(dec_value, 10);
//     value = isNaN(value) ? 0 : value;
//     if (value > 1) {
//       value--;
//       $('.cart-input-number').val(value);
//     }
//   });
// });
/******/ })()
;