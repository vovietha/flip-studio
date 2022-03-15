@extends('user.layouts.app')
@section('title', 'Shop')
@section('content')
  <div class="p-10 grid grid-cols-5">
    @include('user.layouts.sidebar')
    {{-- MOBILE --}}
    <div class="md:hidden">
        <button>REFINE</button>
        <button>SORT</button>
    </div>
    <div class="grid grid-cols-1 col-span-3 md:grid-cols-3 ">
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
    </div>
    <div class="justify-end hidden md:flex">
      <h1>SORT</h1>
      <div></div>
    </div>
  </div>
@endsection
