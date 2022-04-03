/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/cart-value-button.js ***!
  \*******************************************/
var increaseBtn = document.getElementById('cart-button-increase');
var decreaseBtn = document.getElementById('cart-button-decrease'); // increaseBtn.addEventListener('click', function () {
//   var value = parseInt(document.getElementById('cart-input-number').value, 10);
//   value = isNaN(value) ? 0 : value;
//   value++;
//   document.getElementById('cart-input-number').value = value;
// });
// decreaseBtn.addEventListener('click', function () {
//   var value = parseInt(document.getElementById('cart-input-number').value, 10);
//   value = isNaN(value) ? 0 : value;
//   value < 1 ? value = 1 : '';
//   value--;
//   document.getElementById('cart-input-number').value = value;
// });
// 

$(document).ready(function () {
  // DETAIL PRODUCT PAGE
  $('#addToCartBtn').click(function (e) {
    e.preventDefault();
    var product_id = $(this).closest('#product_data').find('#product_id').val();
    var product_qty = $(this).closest('#product_data').find('#cart-input-number').val(); // AJAX SETUP

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }); // AJAX

    $.ajax({
      method: 'POST',
      url: '/add-to-cart',
      data: {
        'product_id': product_id,
        'product_qty': product_qty
      },
      success: function success(response) {
        alert(response.status);
      },
      error: function error(response) {
        alert(response.status);
      }
    });
  }); //
  // INCREASE - DECREASE

  $('#cart-button-increase').click(function (e) {
    e.preventDefault();
    var inc_value = $(this).closest('#product_data').find('#cart-input-number').val();
    var value = parseInt(inc_value, 10);
    value = isNaN(value) ? 0 : value;

    if (value < 10) {
      value++;
      $(this).closest('#product_data').find('#cart-input-number').val(value);
    }
  });
  $('#cart-button-decrease').click(function (e) {
    e.preventDefault();
    var dec_value = $(this).closest('#product_data').find('#cart-input-number').val();
    var value = parseInt(dec_value, 10);
    value = isNaN(value) ? 0 : value;

    if (value > 1) {
      value--;
      $(this).closest('#product_data').find('#cart-input-number').val(value);
    }
  }); // CART PAGE

  $('#delete-cart-item').click(function (e) {
    e.preventDefault(); // AJAX SETUP

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var product_id = $(this).closest('#product_data').find('#product_id').val(); //AJAX

    $.ajax({
      method: 'POST',
      url: 'delete-cart-item',
      data: {
        'product_id': product_id
      },
      success: function success(response) {
        window.location.reload();
        alert(response.status);
      }
    });
  });
});
/******/ })()
;