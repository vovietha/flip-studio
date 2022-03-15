@extends('user.layouts.app')
@section('title', 'Shop')
@section('content')
  <div class="grid grid-cols-1 md:grid-cols-6">
    @include('user.layouts.sidebar')
    {{-- MOBILE --}}
    <div class="md:hidden w-full text-center">
        @include('user.layouts.refine&sort')
    </div>
    <div class="md:hidden w-full h-full bg-white">
      @include('user.layouts.refine')
    </div>
    <div class="p-10 grid grid-cols-1 col-span-1 md:col-span-4 md:grid-cols-4 ">
      {{-- CARD-1 --}}
       <div>
        content1
       </div>
       {{-- CARD-2 --}}
       <div>
        content1
       </div>
       {{-- CARD-3 --}}
       <div>
        content1
       </div>
       {{-- CARD-4 --}}
       <div>
        content1
       </div>
    </div>
    <div class="justify-end hidden md:flex">
      <h1>SORT</h1>
      <div></div>
    </div>
  </div>
@endsection
