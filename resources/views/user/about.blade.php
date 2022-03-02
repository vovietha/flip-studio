@extends('user.layouts.app')
@section('title', 'About')
@section('content')
<div class="flex flex-col item-center mx-auto max-w-7xl space-y-[100px]">
  <div>
    <h1 class="text-center text-3xl font-bold my-5">About us</h1>
    <p class="font-light text-center">"Real comfort, visual and physical, is vital to every room."</p>
  </div>
  {{-- CONTENT-1 --}}
  <div class="bg-black text-white p-10">
    <h1 class="text-xl mb-5 font-bold text-center md:text-left">FLIP STUDIO</h1>
    <div class="flex flex-col md:flex-row items-center space-y-7 md:space-x-7 leading-6">
      <p class="text-justify">FlIP STUDIO was established on Jan 11, 2022, a warm summer of Saigon was born an online shop, materials are delivered to customers to choose at home. From there, the first products were born.</p>
      <p class="text-justify">is a creative studio, designing on the desk, choosing materials, creating products, taking photos of products. It is an open space where customers can visit, choose and be consulted about products, so that when bringing the products home, they bring a sense of home. In the studio guests can see the product being photographed in the sun, shortening the distance between the product, the customer and the Flip studio.</p>
      <p class="text-justify">Although each summer will bring a different feeling, but in general, it is hot, vibrant but also cool and leisurely. The feeling of summer is a recipe that blends sunshine with youthful passion, it's passionate and familiar.</p>
    </div>
  </div>
  {{-- CONTENT-2  --}}
  <div class="flex items-center justify-around flex-col md:flex-row">
    <div>
      <h1 class="text-xl mb-7 font-medium text-center md:text-left">SUSTAINABILITY</h1>
      <p class="text-sm w-[400px] text-gray-500 leading-6 text-justify" >“Sustainability” is a concept that defines development in all aspects but still ensures that development exists in a state of balance. Bringing the concept of "sustainability" into interior products and services is a pioneering and challenging step that FLIP STUDIO always strives to spread and inspire a positive lifestyle, sustainable consumption and more for a green planet's future.</p>
    </div>
    <div class="w-full md:w-[50%] p-10 md:pl-10">
      <img src="https://images.unsplash.com/photo-1617978241112-898785df45b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80" alt="">
    </div>
  </div>
  {{-- CONTENT-3 --}}
  <div class="w-full">
    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2800&q=80" alt="">
  </div>
  {{-- CONTENT-4 --}}
  <div class="flex flex-col md:flex-row space-x-0 md:space-x-[100px] space-y-[100px] md:space-y-0 justify-between">
    <div class="grow">
      <img src="https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
    </div>
    <div class="flex flex-col w-full px-10 md:px-0">
      <h1 class="text-xl mb-7 font-medium">THE BRANDNAME HAS BEEN BUILT</h1>
      <p class="text-sm text-gray-500 leading-6 text-justify">FLIP STUDIO brand is recognized as an impressive, prestigious and high-level interior designing company. Customers come to us to find an expert in interior design and decoration that always creates unique and impressive works. Each of these works give us and our colleagues a new challenge in the face of high responsibility.</p>
      <div class="w-full mt-10 py-8 md:py-0">
        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1316&q=80" alt="">
      </div>
    </div>
  </div>
</div>
@endsection
