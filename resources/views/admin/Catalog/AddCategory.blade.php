@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
  <div>
    @if(session('status')) 
      <div class="bg-green-700 text-white w-full flex items-center justify-center text-sm">
        <span class="material-icons mr-1">
          check
        </span>
       {{ session('status') }}
      </div>
    @endif
    <h1>CREATE NEW CATEGORY</h1>
    <div class="min-w-full">
      <form action="{{route(('admin.catalogs.store'))}}" method="POST" class="w-full space-y-4 py-5">
        @csrf
        <div class="flex flex-col space-y-3 ">
          <label for="name" class="text-xs">NAME: </label>
          <input type="text" name="name" id="name" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="slug" class="text-xs">SLUG: </label>
          <input type="text" name="slug" id="slug" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="detail" class="text-xs">DETAIL: </label>
          <input type="text" name="detail" id="detail" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <button type="submit" class="w-full p-[5px] bg-black text-white items-center transition-all hover:bg-[#323232] duration-200 tracking-widest">ADD NEW</button>
      </form>
    </div>
  </div>
@endsection