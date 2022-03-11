@extends('user.layouts.app')
@section('title', 'Bag')
@section('content')
  <div>
    <h1 class="text-center py-5">CART</h1>
    <div class="flex px-5">
      {{-- ITEMS --}}
      <div class="px-[20px] w-[65%]">
        <h1 class="mb-[12px] tracking-widest">ITEMS</h1>
        <table class="w-full">
          <thead class="border-y-[1px]">
            <th class="p-[12px]">PRODUCT</th>
            <th class="p-[12px]"></th>
            <th class="p-[12px]">PRICE</th>
            <th class="p-[12px]">QUANTITY</th>
            <th class="p-[12px]">SUBTOTAL</th>
          </thead>
          <tbody>
            <tr class="border-b-[1px]">
              <td class="p-[12px]"><a href=""><img src="img/home-img/home-img-3.jpg" alt="" class="w-[200px]"></a></td>
              <td class="p-[12px]">
                <a href="">GHẾ GỖ</a>
                <p></p>
                <p></p>
              </td>
              <td class="p-[12px]">3.600.000 VND</td>
              <td class="p-[12px]">
                <form class="cart-form-button flex text-center">
                  <div class="cart-value-button" id="cart-button-decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                  <input type="number" id="cart-input-number" value="0" />
                  <div class="cart-value-button" id="cart-button-increase" onclick="increaseValue()" value="Increase Value">+</div>
                </form>
              </td>
              <td class="p-[12px]">3,600,000 VND</td>
              <td class="p-[12px]">
                <span class="material-icons">
                  highlight_off
                  </span>              
              </td>
            </tr>
          </tbody>
        </table>
        <div class="flex p-10 space-x-10">
          <button class="hover:underline font-thin">CLEAR CART</button>
          <button>UPDATE CART</button>
        </div>
      </div>
      {{-- CART TOTALS --}}
      <div class="px-[20px] w-[35%]">
        <h1 class="mb-[12px] tracking-widest ">CART TOTALS</h1>
        <div class="border-[1px]">
          <div class="py-[10px] px-[25px] space-y-[20px]">
            <div class="flex justify-between p-[10px]">
              <p>SUBTOTAL</p>
              <p>4,160,000 VND</p>
            </div>
            <div class="flex justify-between border-y-[1px] p-[10px]">
              <p>SHIPPING</p>
              <p>Shipping costs are calculated during checkout.</p>
            </div>
            <div class="flex justify-between p-[20px]">
              <p>TOTAL</p>
              <p>4,160,000 VND</p>
            </div>
            <div class="py-10">
              <span class="w-full p-[10px] bg-black text-white flex items-center">
                <a href="" class="w-full items-center text-center tracking-widest">PROCEED TO CHECKOUT</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection