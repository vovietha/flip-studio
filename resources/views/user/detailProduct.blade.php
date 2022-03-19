@extends('user.layouts.app')
@section('title', 'DETAIL')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-2 mx-auto max-w-7xl gap-5">
    {{-- IMG PRODUCT --}}
    <div class="">
     <img src="img/home-img/home-img-3.jpg" alt="" class="w-full">
     <img src="img/home-img/home-img-3.jpg" alt="" class="w-full">
    </div>
    {{-- INFORMATION PRODUCT --}}
    <div class="px-20 space-y-3">
      <h1 class="text-lg">GHẾ GỖ</h1>
      <p class="text-lg">3,200,000 VND</p>
      <div class="text-xs space-y-4">
        <p>PRODUCT INFORMATION</p>
        <div class="space-y-2">
          <p>Dimensions: W1700 - D800 - H760 mm</p>
          <p>Fabric: Gỗ sồi tự nhiên + MDF chống ẩm</p>
        </div>
        <div class="text-xs space-y-2">
          <p>TAG: </p>
          <div class="space-y-2">
            <a href="#">Living room</a>,
            <a href="#">Sofa</a>
          </div>
        </div>
        {{-- COLOR --}}
        <div class="space-y-2" >
          <p>COLOR</p>
          <div class="rounded-full bg-black w-10 h-10">
          </div>
        </div>
        {{-- QUANTITY --}}
        <div class="space-y-2">
          <p>QUANTITY</p>
          <form class="cart-form-button flex justify-start items-center h-full">
            <div class="cart-value-button" id="cart-button-decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
            <input type="number" class="h-[32px]" id="cart-input-number" value="0" />
            <div class="cart-value-button" id="cart-button-increase" onclick="increaseValue()" value="Increase Value">+</div>
          </form>
        </div>
        <div class="space-y-3">
          <input type="submit" class="w-full h-8 border-solid border-[1px] transition-all hover:bg-[#EEEE] duration-100 cursor-pointer bg-white text-black tracking-widest" value="ADD TO CART">
          <input type="submit" class="w-full h-8 transition-all hover:bg-[#323232] duration-100 cursor-pointer bg-black text-white tracking-widest" value="BUY NOW">
        </div>
      </div>
    </div>
  </div>
@endsection