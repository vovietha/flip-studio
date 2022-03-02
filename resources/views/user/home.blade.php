@extends('user.layouts.app')
@section('title', 'Home')
@section('content')
  <div>
    {{-- CONTENT-1 --}}
    <div class="h-[450px]" >
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/home-img/home-img-1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/home-img/home-img-2.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/home-img/home-img-3.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/home-img/home-img-4.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/home-img/home-img-5.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/home-img/home-img-6.jpg" alt=""></div>
          <div class="swiper-slide"><img src="img/home-img/home-img-7.jpg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    {{-- CONTENT-2 --}}
    <div class="flex flex-col md:flex-row">
      <div class="p-7 md:p-10 space-y-5">
        <h1 class="text-3xl">“Every room needs a touch of black, just as it needs one antique piece.”</h1>
        <p class="text-center font-thin">– Jan Showers</p>
      </div>
      <div class="p-7 md:p-10 space-y-3">
        <p class="text-justify">Our products aim to be friendly, with a story and personality for each product. Design language is shapes, simple lines and dots (sculpture-inspired geoglyphs)</p>
        <p class="text-justify">Style: Scandinavian, tropical, minimalism.</p>
        <a href="/collections" class="inline-block w-full md:w-auto p-2 bg-black text-white mx-auto text-xs text-center">SEE MORE</a>
      </div>
    </div>
</div>
@endsection