@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
  <div>
    <h1>EDIT ACCOUNT</h1>
    <div class="min-w-full">
      <form action="{{route('admin.accounts.update',$accounts->id )}}" method="POST" class="w-full space-y-4 py-5">
        @csrf
        @method('PATCH')
        <div class="flex flex-col space-y-3 ">
          <label for="username" class="text-xs">USERNAME: </label>
          <input type="text" name="username" id="username" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="email" class="text-xs">EMAIL: </label>
          <input type="text" name="email" id="email" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <button type="submit" class="w-full p-[5px] bg-black text-white items-center transition-all hover:bg-[#323232] duration-200 tracking-widest">EDIT</button>
      </form>
    </div>
  </div>
@endsection