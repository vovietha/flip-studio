@extends('user.layouts.app')
@section('title', 'Login')
@section('content')
  <div class="flex flex-col item-center mx-auto max-w-7xl">
    <h1 class="w-full my-[30px] text-center text-bold text-2xl">LOGIN OR REGISTER</h1>
    <div class="flex flex-col md:flex-row justify-between">
      {{-- LOGIN --}}
      <form class="login-form flex flex-col w-full px-20 space-y-6 mb-10 md:mb-0 border-r-[1px] border-[#ccc]">
        <h1 class="w-full text-center text-xl">Login</h1>
        <div class="flex flex-col justify-between w-full space-y-2" required>
          <label for="email" class="text-sm">Email address <span class="text-[#FF1818]">*</span> </label>
          <input type="text" name="email" id="email" placeholder="Email..." class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
        </div>
        <div class="flex flex-col justify-between w-full space-y-2" required>
          <label for="password" class="text-sm">Password <span class="text-[#FF1818]">*</span> </label>
          <input type="text" name="password" id="password" placeholder="Password..." class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
        </div>
        {{-- FORGOT PASSWORD LINK --}}
        <a href="#" class="forgot-password-link text-center text-sm hover:underline">Forgot your password?</a>
        <button type="submit" method="POST" class="w-[40%] h-8 bg-black text-white mx-auto text-sm">LOGIN</button>
      </form>
      {{-- FORGOT PASSWORD CONTENT --}}
      <form class="forgot-password-form w-full flex flex-col px-20 space-y-6 mb-10 md:mb-0 border-r-[1px] border-[#ccc] hidden" required>
        <h1 class="text-center text-xl">Forgot your password?</h1>
        <p class="text-[12px] text-center">Please enter the e-mail address you use to log in, and we’ll send you a link to reset your password.</p>
        <div class="flex flex-col justify-between w-full space-y-2" required>
          <label for="email" class="text-sm">Email address <span class="text-[#FF1818]">*</span> </label>
          <input type="text" name="email" id="email" placeholder="Email..." class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
        </div>
        <a href="#" class="login-here-link text-center text-sm hover:underline">Already a member? Login here</a>
        <button type="submit" method="POST" class="w-[50%] h-8 bg-black text-white text-[12px] mx-auto">RESET PASSWORD</button>
      </form>
      {{-- REGISTER --}}
      <form class="flex flex-col w-full px-20 space-y-6">
        <h1 class="w-full text-center text-xl">Create an account</h1>
        <div class="flex flex-col justify-between w-full space-y-2">
          <label for="email" class="text-sm">Email address <span class="text-[#FF1818]">*</span> </label>
          <input type="text" name="email" id="email" placeholder="Email..." class="border border-[#ccc] h-[35px] text-[14px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
        </div>
        <div class="flex flex-col justify-between w-full space-y-2">
          <label for="password" class="text-sm">Password <span class="text-[#FF1818]">*</span> </label>
          <input type="text" name="password" id="password" placeholder="Password..." class="border border-[#ccc] h-[35px] text-[14px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
        </div>
        <div class="form-check text-sm flex items-center">
          <input type="checkbox" class="form-check-input h-4 w-4 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="acceptTerms&Policy">
          <label class="form-check-label inline-block text-gray-400" for="acceptTerms&Policy">
            I accept the <a href="#" class="text-black hover:underline">Terms of Use</a> & <a href="#" class="text-black hover:underline">Privacy Policy</a>
          </label>
        </div>
        <button type="submit" method="POST" class="w-[40%] h-8 bg-black text-white mx-auto text-sm">CREATE</button>
      </form>
    </div>
  </div>
@endsection