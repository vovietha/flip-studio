@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
  <div>
    <h1>EDIT CATEGORY</h1>
    <div class="min-w-full">
      <form action="" class="w-full space-y-4 py-5">
        <div class="flex flex-col space-y-3 ">
          <label for="name" class="text-xs">NAME: </label>
          <input type="text" name="name" id="name" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="detail" class="text-xs">DETAIL: </label>
          <input type="text" name="detail" id="detail" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <button type="submit" class="w-full p-[5px] bg-black text-white items-center transition-all hover:bg-[#323232] duration-200 tracking-widest">EDIT</button>
      </form>
    </div>
  </div>
@endsection