//Increase/Decrease Input
function increaseValue() {
  const value = parseInt(document.getElementById('cart-input-number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('cart-input-number').value = value;
}

function decreaseValue() {
  const value = parseInt(document.getElementById('cart-input-number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('cart-input-number').value = value;
}