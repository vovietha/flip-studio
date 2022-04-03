@extends('user.layouts.app')
@section('title', 'DETAIL')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-2 mx-auto max-w-7xl gap-5 space-y-10">
    {{-- IMG PRODUCT DESKTOP --}}
    <div class="space-y-10 hidden md:block md:col-span-1 ">
      <img src="img/detail product-img/104149-ghe-an-albert-mau-coffee.jpeg" alt="">
      <img src="img/detail product-img/104149-ghe-an-albert-mau-coffee-2.jpeg" alt="">
      <img src="img/detail product-img/104149-ghe-an-albert-mau-coffee-3.jpeg" alt="">
      <img src="img/detail product-img/104149-ghe-an-albert-mau-coffee-4.jpeg" alt="">
      <img src="img/detail product-img/104149-ghe-an-albert-mau-coffee-5.jpeg" alt="">
    </div>
    {{-- IMG PRODUCT MOBILE --}}
    <div class="col-span-2 md:hidden">
      @include('user.layouts.productCarousel')
     </div>
    {{-- INFORMATION PRODUCT --}}
    <div class="h-full pb-10">
      <div class="px-4 sm:px-7 md:px-9 lg:px-13 space-y-3 col-span-2 md:col-span-1 md:sticky top-14">
        <h1 class="text-lg">{{$products->title}}</h1>
        <p class="text-lg">${{$products->price}}</p>
        <div class="text-xs space-y-4">
          <p>PRODUCT INFORMATION</p>
          <div class="space-y-2">
            <p>Dimensions:{{$products->details}}</p>
            <p>Fabric:{{$products->description}}</p>
          </div>
          <div class="text-xs space-y-2">
            <p>CODE: {{$products->sku}}</p>
          </div>
          {{-- <div class="text-xs space-y-2">
            <p>TAG: </p>
            <div class="space-y-2">
              <a href="#">Sofa</a>
            </div>
          </div> --}}
          {{-- AVAILABLE --}}
          <div class="space-y-2" >
            @if($products->stock > 0)
              <p>IN STOCK</p>
            @else
              <p>OUT STOCK</p>
            @endif
          </div>
          {{-- QUANTITY --}}
          <div class="space-y-2">
            <p>QUANTITY</p>
            <div class="cart-form-button flex justify-start items-center h-full">
              <button type="button" class="cart-value-button" id="cart-button-decrease" value="Decrease Value">-</button>
              <input type="number" class="h-[32px]" id="cart-input-number" value="1" />
              <button type="button" class="cart-value-button" id="cart-button-increase" value="Increase Value">+</button>
            </div>
          </div>
          <div class="space-y-3">
            <input type="submit" class="w-full h-8 border-solid border-[1px] transition-all hover:bg-[#EEEE] duration-100 cursor-pointer bg-white text-black tracking-widest" value="ADD TO CART">
            <input type="submit" class="w-full h-8 transition-all hover:bg-[#323232] duration-100 cursor-pointer bg-black text-white tracking-widest" value="BUY NOW">
          </div>
        </div>
      </div>
    </div>
    {{-- RELATED PRODUCTS --}}
    <div class="col-span-2 border-solid border-t-[1px] border-black space-y-10">
      <h1 class="text-lg tracking-widest text-center mt-10">YOU MAY ALSO LIKE</h1>
      <div>
        @include('user.layouts.relatedCarousel')
      </div>
    </div>
  </div>
@endsection
