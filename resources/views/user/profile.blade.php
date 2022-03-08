@extends('user.layouts.app')
@section('title', 'Profile')
@section('content')
  <h1 class="text-xl font-light text-center my-6">ACCOUNT DETAILS</h1>
  <div class="flex max-w-7xl mx-auto px-2">
    <div class="hidden md:block flex-none">
      @include('user.layouts.accountSidebar')
    </div>
    <div class="px-5 md:px-20 grow">
      <div>
        <p class="mb-5">Edit your preferences below.</p>
        <form action="" class="space-y-5">
          <div>
            <h5 class="text-md mb-3">Account Information</h5>
            <div class="px-10 space-y-4 text-sm">
              {{-- NAME --}}
              <div class="space-y-3">
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- PHONE --}}
              <div class="space-y-3">
                <label for="phone">Phone</label>
                <input type="text" name="phone" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- EMAIL --}}
              <div class="space-y-3">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
            </div>
          </div>
          <div>
            <h5 class="text-md mb-3">Account Password</h5>
            <div class="px-10 space-y-4 text-sm">
              {{-- OLD PASSWORD --}}
              <div class="space-y-3">
                <label for="oldPassword" class="mb-3">Old password</label>
                <input type="password" name="oldPassword" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- NEW PASSWORD --}}
              <div class="space-y-3">
                <label for="newPassword" class="mb-3">New password</label>
                <input type="password" name="newPassword" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
            </div>
          </div>
          <div>
            <h5 class="text-md mb-3">Account Address</h5>
            <div class="px-10 space-y-4 text-sm">
              {{-- REGION --}}
              <div class="space-y-3">
                <label for="region">Country/Region</label>
                <input type="text" name="region" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- STATE --}}
              <div class="space-y-3">
                <label for="province">State/Province</label>
                <input type="text" name="province" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- CITY --}}
              <div class="space-y-3">
                <label for="city" class="mb-3">City/District</label>
                <input type="text" name="city" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- WARD --}}
              <div class="space-y-3">
                <label for="ward" class="mb-3">Commune/Ward/Town</label>
                <input type="text" name="ward" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- CITY --}}
              <div class="space-y-3">
                <label for="city" class="mb-3">City/District</label>
                <input type="text" name="city" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
              {{-- ADDRESS --}}
              <div class="space-y-3">
                <label for="address" class="mb-3">Street address</label>
                <input type="text" name="address" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full">
              </div>
            </div>
          </div>
          <div class="px-10">
            <input type="submit" class="w-full h-8 bg-black text-white" value="SAVE CHANGES">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection


