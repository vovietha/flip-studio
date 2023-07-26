@extends('user.layouts.app')
@section('title', 'Shop')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-6 p-0 md:p-10">
    @include('user.layouts.sidebar')
    {{-- MOBILE --}}
    <div class="fixed top-[54px] md:hidden w-full text-center">
        @include('user.layouts.refine&sort')
    </div>
    <div class="md:hidden w-full h-full bg-white">
      @include('user.layouts.refine')
    </div>
    <div class="grid grid-cols-1 col-span-1 sm:grid-cols-2 sm:col-span-1  md:col-span-4 md:grid-cols-4 gap-5 my-[100px] md:my-0 ">
      {{-- CARD-1 --}}
      @foreach($products as $product)
       <div class="mx-auto px-5 md:px-0">
         <a href="{{url('shop/'.$catalog->slug.'/'.$product->title)}}" class="space-y-3">
          {{-- <a href="{{url('product/'.$product->id)}}" class="space-y-3"> --}}
            <div class="md:w-[209px] :h-[139px]">
              <img src="{{asset('uploads/products-img/'.$product->thumbnail)}}" alt="" class="w-full">
            </div>
            <div class="text-sm space-y-1">
              <h1>{{$product->title}}</h1>
              <p>$ {{$product->price}}</p>
            </div>
          </a>
        </div>       
        @endforeach
    </div>
    <div class="justify-end hidden md:flex">
      @include('user.layouts.sort')
    </div>
  </div>
@endsection
