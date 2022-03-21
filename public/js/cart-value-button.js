/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/cart-value-button.js ***!
  \*******************************************/
function _readOnlyError(name) { throw new TypeError("\"" + name + "\" is read-only"); }

//Increase/Decrease Input
function increaseValue() {
  var value = parseInt(document.getElementById('cart-input-number').value, 10);
  isNaN(value) ? 0 : value, _readOnlyError("value");
  +value, _readOnlyError("value");
  document.getElementById('cart-input-number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('cart-input-number').value, 10);
  isNaN(value) ? 0 : value, _readOnlyError("value");
  value < 1 ? (1, _readOnlyError("value")) : '';
  +value, _readOnlyError("value");
  document.getElementById('cart-input-number').value = value;
}
/******/ })()
;