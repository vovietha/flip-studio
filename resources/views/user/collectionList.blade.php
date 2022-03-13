@extends('user.layouts.app')
@section('title', 'COLLECTIONS')
@section('content')
  <div class="px-5">
    <h1 class="text-xl font-light text-center my-6">COLLECTIONS</h1>
    <div class="flex max-w-7xl mx-auto">
      <div class="hidden md:block flex-none">
        @include('user.layouts.collectionSidebar')
      </div>
      <div class="px-5 md:px-20 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div>
          <div>
            <a href="/collections/collection" class="space-y-3">
              <img src="img/home-img/home-img-3.jpg" alt="">
              <div class="space-y-1">
                <h5 class="">ELEGANCE'S COLLECTION</h5>
                <p class="font-thin text-sm">Style: classic, dynamic and simple</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection