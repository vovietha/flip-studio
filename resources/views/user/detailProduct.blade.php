@extends('user.layouts.app')
@section('title', 'DETAIL')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-2 mx-auto max-w-7xl gap-5 space-y-10" id="product_data">
    {{-- IMG PRODUCT DESKTOP --}}
    <div class="space-y-10 hidden md:block md:col-span-1 ">
      <img src="{{asset('uploads/products-img/'.$products->thumbnail)}}" alt="">
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
              <label>IN STOCK</label>
            @else
              <label>OUT OF STOCK</label>
            @endif
          </div>
          {{-- QUANTITY --}}
          <div class="space-y-2">
            <input type="hidden" value="{{$products->id}}" id="product_id">
            <p>QUANTITY</p>
            <div class="cart-form-button flex justify-start items-center h-full">
              <button type="button" class="cart-value-button" id="cart-button-decrease" value="Decrease Value">-</button>
              <input type="number" class="h-[32px]" id="cart-input-number" value="1" />
              <button type="button" class="cart-value-button" id="cart-button-increase" value="Increase Value">+</button>
            </div>
          </div>
          <div class="space-y-3">
            @if($products->stock > 0)
              <input type="submit" class="w-full h-8 border-solid border-[1px] transition-all hover:bg-[#EEEE] duration-100 cursor-pointer bg-white text-black tracking-widest" value="ADD TO CART" id="addToCartBtn">
              <input type="submit" class="w-full h-8 transition-all hover:bg-[#323232] duration-100 cursor-pointer bg-black text-white tracking-widest" value="BUY NOW">
            @else
              <button class="w-full h-8 border-solid border-[1px] transition-all duration-100 cursor-pointer bg-white text-black tracking-widest" disabled>
                OUT OF STOCK
              </button>
            @endif
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
