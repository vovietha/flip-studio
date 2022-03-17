@extends('user.layouts.app')
@section('title', 'Shop')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-6 p-0 md:p-10">
    @include('user.layouts.sidebar')
    {{-- MOBILE --}}
    <div class="fixed md:hidden w-full text-center">
        @include('user.layouts.refine&sort')
    </div>
    <div class="md:hidden w-full h-full bg-white">
      @include('user.layouts.refine')
    </div>
    <div class="px-10 grid grid-cols-1 col-span-1 sm:grid-cols-2 sm:col-span-1  md:col-span-4 md:grid-cols-4 gap-5 my-[100px] md:my-0 ">
      {{-- CARD-1 --}}
       <div>
          <div class="w-[300px]">
            <img src="img/home-img/home-img-3.jpg" alt="" class="w-full">
          </div>
          <div>
            <h1>GHẾ GỖ</h1>
            <p>3,500,000 VND</p>
          </div>
       </div>
       {{-- CARD-2 --}}
       <div>
          <div class="w-[300px]">
            <img src="img/home-img/home-img-3.jpg" alt="" class="w-full">
          </div>
          <div>
            <h1>GHẾ GỖ</h1>
            <p>3,500,000 VND</p>
          </div>
       </div>
       {{-- CARD-3 --}}
       <div>
        <div class="w-[300px]">
          <img src="img/home-img/home-img-3.jpg" alt="" class="w-full">
        </div>
        <div>
          <h1>GHẾ GỖ</h1>
          <p>3,500,000 VND</p>
        </div>
       </div>
       {{-- CARD-4 --}}
       <div>
        <div class="w-[300px]">
          <img src="img/home-img/home-img-3.jpg" alt="" class="w-full">
        </div>
        <div>
          <h1>GHẾ GỖ</h1>
          <p>3,500,000 VND</p>
        </div>
       </div>
    </div>
    <div class="justify-end hidden md:flex">
      <h1>SORT</h1>
      <div></div>
    </div>
  </div>
@endsection
