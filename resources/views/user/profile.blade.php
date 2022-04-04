@extends('user.layouts.app')
@section('title', 'Profile')
@section('content')
<div class="px-5">
  <h1 class="text-xl font-light text-center my-6">ACCOUNT DETAILS</h1>
  <div class="flex max-w-7xl mx-auto">
    <div class="hidden md:block flex-none">
      @include('user.layouts.accountSidebar')
    </div>
    <div class="px-0 md:px-20 grow text-sm">
      <p class="mb-5">Edit your preferences below.</p>
      <form action="" class="space-y-5">
        @foreach($users as $user)
        <div>
          <h5 class="text-md mb-3">Account Information</h5>
          <div class="px-3 md:px-10 space-y-4 text-xs">
            {{-- NAME --}}
            <div class="space-y-3">
              <label for="name">Name</label>
              <input type="text" name="name" placeholder="{{$user->fname}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
            {{-- PHONE --}}
            <div class="space-y-3">
              <label for="phone">Phone</label>
              <input type="text" name="phone" placeholder="{{$user->phone}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
            {{-- EMAIL --}}
            <div class="space-y-3">
              <label for="email">Email</label>
              <input type="text" name="email" placeholder="{{$user->email}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
          </div>
        </div>
        <div>
          <h5 class="text-md mb-3">Account Password</h5>
          <div class="px-3 md:px-10 space-y-4 text-xs">
            {{-- OLD PASSWORD --}}
            <div class="space-y-3">
              <label for="oldPassword" class="mb-3">Old password</label>
              <input type="password" name="oldPassword" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:rounded-none focus:invalid:border-red w-full p-2 md:p-5">
            </div>
            {{-- NEW PASSWORD --}}
            <div class="space-y-3">
              <label for="newPassword" class="mb-3">New password</label>
              <input type="password" name="newPassword" placeholder="" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
          </div>
        </div>
        <div>
          <h5 class="text-md mb-3">Account Address</h5>
          <div class="px-3 md:px-10 space-y-4 text-xs">
            {{-- REGION --}}
            <div class="space-y-3">
              <label for="region">Country/Region</label>
              <input type="text" name="region" placeholder="{{$user->country}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
            {{-- STATE --}}
            <div class="space-y-3">
              <label for="province">State/Province</label>
              <input type="text" name="province" placeholder="{{$user->state}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
            {{-- CITY --}}
            <div class="space-y-3">
              <label for="city" class="mb-3">City/District</label>
              <input type="text" name="city" placeholder="{{$user->city}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
            {{-- ADDRESS --}}
            <div class="space-y-3">
              <label for="address" class="mb-3">Street address</label>
              <input type="text" name="address" placeholder="{{$user->address}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
            </div>
          </div>
        </div>
        <div class="px-3 md:px-10">
          <input type="submit" class="w-full h-8 bg-black text-white" value="SAVE CHANGES">
        </div>
        @endforeach
      </form>
    </div>
  </div>
</div>
@endsection


