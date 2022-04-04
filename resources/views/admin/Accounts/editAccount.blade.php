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
          <input type="text" name="username" id="username" placeholder="{{$accounts->username}}" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="email" class="text-xs">EMAIL: </label>
          <input type="text" name="email" id="email" placeholder="{{$accounts->email}}"  class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <button type="submit" class="w-full p-[5px] border-solid border-[1px] bg-black text-white items-center transition-all hover:bg-[#323232] duration-200 tracking-widest">EDIT</button>
      </form>
      <a href="{{route('admin.accounts.index')}}" class="w-full block p-[5px] border-solid border-[1px] bg-white text-black items-center transition-all hover:border-black duration-200 tracking-widest text-center">BACK</a>
    </div>
  </div>
@endsection