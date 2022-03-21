@extends('user.layouts.app')
@section('title', 'Bag')
@section('content')
  <div class="px-5 md:px-0">
    <h1 class="text-center py-5">CART</h1>
    <div class="flex flex-col md:flex-row">
      {{-- ITEMS --}}
      <div class="px-0 md:px-[20px] mb-10 md:mb-0 grow">
        <h1 class="mb-[12px] tracking-widest">ITEMS</h1>
        <table class="w-full">
          <thead class="border-y-[1px]">
            <th class="p-[12px] font-medium">PRODUCT</th>
            <th class="p-[12px] font-medium"></th>
            <th class="p-[12px] font-medium">PRICE</th>
            <th class="p-[12px] font-medium">QUANTITY</th>
            <th class="p-[12px] font-medium">SUBTOTAL</th>
          </thead>
          <tbody>
            <tr class="border-b-[1px]">
              <td class="p-[12px] w-[200px] "><a href=""><img src="img/home-img/home-img-3.jpg" alt=""></a></td>
              <td class="p-[12px] font-thin text-center">
                <a href="">GHẾ GỖ</a>
                <p></p>
                <p></p>
              </td>
              <td class="p-[12px] font-thin text-center">3.600.000 VND</td>
              <td class="p-[12px] h-full">
                <form class="cart-form-button flex justify-center items-center h-full">
                  <div class="cart-value-button" id="cart-button-decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                  <input type="number" class="h-[40px]" id="cart-input-number" value="0" />
                  <div class="cart-value-button" id="cart-button-increase" onclick="increaseValue()" value="Increase Value">+</div>
                </form>
              </td>
              <td class="p-[12px] font-thin text-center">3,600,000 VND</td>
              <td class="p-[12px] text-center">
                <span class="material-icons">
                  highlight_off
                  </span>              
              </td>
            </tr>
          </tbody>
        </table>
        <div class="flex p-[12px]  space-x-5 md:space-x-10">
          <button class="hover:underline font-thin">CLEAR CART</button>
          <button class="hover:underline font-thin">UPDATE CART</button>
        </div>
      </div>
      {{-- CART TOTALS --}}
      <div class="px-0 md:px-[20px] flex-none">
        <h1 class="mb-[12px] tracking-widest ">CART TOTALS</h1>
        <div class="border-[1px] border-black">
          <div class="py-[10px] px-[20px] md:px-[25px]">
            <div class="flex justify-between py-[20px] font-thin">
              <p class="text-sm md:text-md">SUBTOTAL</p>
              <p class="text-sm md:text-md">4,160,000 VND</p>
            </div>
            <div class="flex justify-between border-y-[1px] py-[20px] font-thin">
              <p class="text-sm md:text-md">SHIPPING</p>
              <p class="text-sm text-right md:text-md">Shipping costs are calculated during checkout.</p>
            </div>
            <div class="flex justify-between py-[20px] font-thin">
              <p class="text-sm md:text-md">TOTAL</p>
              <p class="text-sm md:text-md">4,160,000 VND</p>
            </div>
            <div class="py-10">
              <span class="w-full p-[10px] bg-black text-white flex items-center transition-all hover:bg-[#323232] duration-200">
                <a href="" class="w-full items-center text-center tracking-widest">PROCEED TO CHECKOUT</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection