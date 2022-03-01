@extends('user.layouts.app')
@section('title', 'Contact')
@section('content')
  <div class="flex flex-col item-center mx-auto px-4 md:px-0 max-w-xl md:max-w-3xl my-[30px]">
    <div class="text-center space-y-4">
      <p>We are here for you!</p>
      <p>Email us at <span class="underline">flipstudioteam@gmail.com</span> or text us at <span class="underline">+84 678 333 414.</span></p>
      <p>We will get back to your message between <span class="underline">Monday - Sunday 9:30am - 9:30pm  (GMT+7)</span></p>
    </div>
    <form action="" method="POST" class="flex flex-col space-y-4 py-5">
      <input type="text" placeholder="Name" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
      <input type="text" placeholder="Email" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
      <input type="text" placeholder="Phone Number" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2">
      <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="border border-[#ccc] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red px-2 py-2"></textarea>
      <button class="w-full bg-black text-white h-8">S E N D</button>

    </form>
  </div>
@endsection
