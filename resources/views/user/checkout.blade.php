@extends('user.layouts.app')
@section('title', 'CHECKOUT')
@section('content')
  <div class="px-5 md:px-0">
    <h1 class="text-center py-5">CHECKOUT</h1>
    <div class="flex flex-col md:flex-row justify-between">
      {{-- DELIVERY INFORMATION FORM --}}
      <div class="px-0 md:px-[20px] mb-10 md:mb-0 w-full md:w-3/4">
        <div class="flex justify-between mb-[12px]">
          <h1>DELIVERY INFORMATION</h1>
          <a href="">LOGIN</a>
        </div>
        <form class="space-y-4 text-xs">
          <div>
            <input type="text" name="fullname" placeholder="FULLNAME" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
          </div>
          <div>
            <input type="email" name="email" placeholder="EMAIL" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
          </div>
          <div>
            <input type="phone" name="phone" placeholder="PHONE NUMBER" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
          </div>
          <div>
            <input type="text" name="address" placeholder="ADDRESS" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
          </div>
          {{-- CITY/STATE --}}
          <div class="inline-flex space-x-5 w-full">
            <input type="text" placeholder="CITY" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            <input type="text" placeholder="STATE" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
          </div>
          <div class="inline-flex space-x-5 w-full">
            <input type="text" placeholder="COUNTRY" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            <input type="number" placeholder="PIN CODE" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
          </div>
          <div>
            <textarea name="note" id="" cols="30" rows="10" placeholder="NOTES" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5"></textarea>
          </div>
          <button type="submit" class="w-full h-8 bg-black text-white">PLACE ORDER</button>
        </form>
      </div>
      {{-- ORDER INFORMATION --}}
      <div  class="px-0 md:px-[20px] w-full md:w-2/5">
        <h1 class="mb-[12px] tracking-widest ">ORDER INFORMATION</h1>
        @foreach($cartItems as $cartItem)
        <div class="border-[1px] border-black">
          <div class="p-5">
            <div class="flex space-x-5 py-[10px] px-[20px] md:px-[25px] border-solid border-b-[1px]">
              <img src="{{asset('uploads/products-img/'.$cartItem->products->thumbnail)}}" alt="" width="100px" height="100px">
              <div class="flex flex-col justify-between">
                <p>{{$cartItem->products->title}}</p>
                <p>x{{$cartItem->product_qty}}</p>
              </div>
            </div>
            <div class="py-[10px] px-[20px] md:px-[25px]">
              <div class="flex justify-between py-[20px] font-thin">
                <p class="text-sm md:text-md">SUBTOTAL</p>
                <p class="text-sm md:text-md">$200</p>
              </div>
              <div class="flex justify-between py-[20px] font-thin">
                <p class="text-sm md:text-md">SHIPPING</p>
                <p class="text-sm md:text-md">$200</p>
              </div>
              <div class="flex justify-between py-[20px] font-thin">
                <p class="text-sm md:text-md">TOTAL</p>
                <p class="text-sm md:text-md">$200</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection