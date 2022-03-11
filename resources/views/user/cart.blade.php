@extends('user.layouts.app')
@section('title', 'Bag')
@section('content')
  <div>
    <h1>CART</h1>
    {{-- ITEMS --}}
    <div>
      <h1>ITEMS</h1>
      <div>
        <thead>
          <th>PRODUCT</th>
          <th></th>
          <th>PRICE</th>
          <th>QUANTITY</th>
          <th>SUBTOTAL</th>
        </thead>
        <tbody>
          <td><a href=""><img src="img/home-img/home-img-3.jpg" alt="" class="w-[200px]"></a></td>
          <td>
            <a href="">GHẾ GỖ</a>
            <p></p>
            <p></p>
          </td>
          <td>3.600.000 VND</td>
          <td>
            <form>
              <div class="cart-decreaseValue-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
              <input type="number" id="number" value="0" />
              <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
            </form>
          </td>
          <td></td>
        </tbody>
      </div>
    </div>
    {{-- CART TOTALS --}}
    <div>

    </div>
  </div>
@endsection