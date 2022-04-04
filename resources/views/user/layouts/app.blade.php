<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- CSRF TOKEN --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- CAROUSEL CSS --}}
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
  {{-- CSS --}}
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  {{-- GOOGLE FONT - POPPINS --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
  {{-- FONTAWESOME --}}
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>@yield('title')</title>
</head>
<body>
  @include('user.layouts.header')
  <div class="py-[52px] md:py-15">
    @yield('content')
  </div>
  @include('user.layouts.footer')

  {{-- CAROUSEL --}}
  {{-- APP JS --}}
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{mix('js/cart-value-button.js')}}"></script>
  <script src="{{mix('js/app.js')}}"></script>
  <script src="{{mix('js/swiper.js')}}"></script>
  <script src="{{mix('js/detail-product-swiper.js')}}"></script>
  <script src="{{mix('js/related-product-swiper.js')}}"></script>
</body>
</html>