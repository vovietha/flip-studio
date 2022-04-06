@extends('user.layouts.app')
@section('title', 'COLLECTIONS')
@section('content')
  <div class="space-y-[100px] mx-auto">
    <div class="flex items-center justify-between">
      <img src="/img/collections-img/elegance/sofa-ban-nuoc-phong-khach-elegance.jpeg" alt="">
      <h1 class="w-full text-center tracking-wider font-medium text-3xl">ELEGANCE</h1>
    </div>
    {{-- CONTENT - 1 --}}
    <div class="flex items-center justify-around px-[100px] ">
      <div class="space-y-5">
        <h1 class="text-xl mb-7 font-medium text-center md:text-left">ELEGANCE - THE ONLY BEAUTY THAT NEVER FADES</h1>
        <div class="space-y-3">
          <p class="text-sm text-gray-500 leading-6 text-justify">Elegance, particularly in design and personal style, is one of the first qualities that outsiders notice, and elegance certainly causes a favorable and lasting first impression.</p>
          <p class="text-sm text-gray-500 leading-6 text-justify">Quite the opposite is true. Elegant design is possible for every style and taste. In this article, we’ll break down what, exactly, elegance looks like in a variety of styles and situations.</p>
        </div>
      </div>
      <div class="flex grow pt-10 md:pl-10">
        <img src="/img/collections-img/elegance/bo-suu-tap-elegance-ghe-an-4.jpeg" alt="">
      </div>
    </div>
    {{-- CONTENT - 2 --}}
    <div class="flex items-center">
      <div class="flex grow pt-10 md:pr-10"><img src="/img/collections-img/elegance/bo-suu-tap-elegance-tu-tv.jpeg" alt=""></div>
      <div class="pr-[100px]">
        <h1 class="text-xl mb-7 font-medium text-center md:text-left">Clean and Nice-Smelling</h1>
        <p class="text-sm text-gray-500 leading-6 text-justify">Elegance requires physical cleanliness. No matter your style, it cannot be elegant if it is not clean. Scrubbed walls, laundered upholstery, vacuumed rugs – all of these are elegant details for one’s home. Also, a lovely scent in your space will go far in leaving a lasting impression of elegance.</p>
      </div>
    </div>
    {{-- CONTENT - 3 --}}
    <div class="grid grid-cols-2">
      <div class="grid grid-rows-2 grid-cols-2">
        <div class=""><img src="/img/collections-img/elegance/bo-suu-tap-elegance-ghe-an.jpeg" alt=""></div>
        <div class=""><img src="/img/collections-img/elegance/bo-suu-tap-elegance-ghe-an-2.jpeg" alt=""></div>
        <div class=""><img src="/img/collections-img/elegance/bo-suu-tap-elegance-ghe-an-1.jpeg" alt=""></div>
        <div class=""><img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt=""></div>
      </div>
      <div class="row-span-2">
        <div><img src="/img/collections-img/elegance/ban-ghe-an-phong-an-elegance-25.jpeg" alt=""></div>
      </div>
    </div>
    {{-- PRODUCTS --}}
    {{-- <div class="space-y-10">
      PRODUCT - CHAIR
      <div class="max-w-7xl mx-auto">
        <h1 class="text-center">CHAIR</h1>
        <div class="flex items-center justify-center">
          PRODUCT - ITEM - 1
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
          PRODUCT - ITEM - 2
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
          PRODUCT - ITEM - 3
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
        </div>
      </div> --}}
      {{-- PRODUCT - TABLE
      <div class="max-w-7xl mx-auto">
        <h1 class="text-center">TABLE</h1>
        <div class="flex items-center justify-center">
          PRODUCT - ITEM - 1
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
          PRODUCT - ITEM - 2
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
          PRODUCT - ITEM - 3
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
        </div>
      </div> --}}
      {{-- PRODUCT - ARMCHAIR
      <div class="max-w-7xl mx-auto">
        <h1 class="text-center">ARMCHAIR</h1>
        <div class="flex items-center justify-center">
          PRODUCT - ITEM - 1
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
          PRODUCT - ITEM - 2
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
          PRODUCT - ITEM - 3
          <div class="">
            <a href="">
              <div class="w-[200px]">
                <img src="/img/collections-img/elegance/102415-ghe-an-elagance-co-tay-mau-tu-nhien.jpeg" alt="">
              </div>
              <div>
                <a href="">GHẾ</a>
                <p>3,200,000 VND</p>
              </div>
            </a>
          </div>
        </div>
      </div> --}}
    {{-- </div> --}}
  </div>
@endsection