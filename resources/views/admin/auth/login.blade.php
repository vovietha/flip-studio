@extends('admin.layouts.guest')
@section('title', 'LOGIN')
@section('content')
  <div class="flex items-center justify-center min-h-screen">
    @if ($errors->any())
          <div class="">
            <ul class="w-ful text-center">
                @foreach ($errors->all() as $error)
                    <li class="bg-red-700 text-white w-full flex items-center justify-center text-sm mb-1"><span class="material-icons mr-1">
                      report_problem
                      </span>
                      {{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
    <div class="w-3/4 flex flex-col md:flex-row items-center">
      <div class="flex-none px-0 py-20 md:px-20">
        <h1 class="font-bold text-8xl">F . </h1>
      </div>
      <form method="POST" class="login-form flex flex-col w-full px-5 py-5 md:px-20 md:py-0 space-y-6 mb-10 md:mb-0 border-l-0 md:border-l-[1px] border-[#ccc]">
        @csrf
        <h1 class="w-full text-center text-xl">ADMINISTRATOR</h1>
        <div class="flex flex-col justify-between w-full space-y-2" required>
          <label for="email" class="text-sm ">Email address <span class="text-[#FF1818]">*</span> </label>
          <input type="text" name="email"  placeholder="Email..." class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
        </div>
        <div class="flex flex-col justify-between w-full space-y-2" required>
          <label for="password" class="text-sm">Password <span class="text-[#FF1818]">*</span> </label>
          <input type="password" name="password" placeholder="Password..." class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
        </div>
        <button type="submit" method="POST" class="w-full h-8 bg-black text-white mx-auto text-sm">LOGIN</button>
        @csrf
      </form>
    </div>
  </div>
@endsection