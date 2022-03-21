@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
  <div class="w-full">
    <form method="post" class="login-form flex flex-col w-full px-5 py-5 md:px-20 md:py-0 space-y-6 mb-10 md:mb-0 border-r-0 md:border-r-[1px] border-[#ccc] bg-black md:bg-white">
      @csrf
      <h1 class="w-full text-center text-xl text-white md:text-black">Login</h1>
      <div class="flex flex-col justify-between w-full space-y-2" required>
        <label for="email" class="text-sm text-white md:text-black">Email address <span class="text-[#FF1818]">*</span> </label>
        <input type="text" name="email"  placeholder="Email..." class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
      </div>
      <div class="flex flex-col justify-between w-full space-y-2" required>
        <label for="password" class="text-sm text-white md:text-black">Password <span class="text-[#FF1818]">*</span> </label>
        <input type="password" name="password" placeholder="Password..." class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
      </div>
      <button type="submit" method="POST" class="w-[40%] h-8 bg-white md:bg-black text-black md:text-white mx-auto text-sm">LOGIN</button>
    </form>
  </div>
@endsection