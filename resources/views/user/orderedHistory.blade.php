@extends('user.layouts.app')
@section('title', 'Ordered history')
@section('content')
<div class="px-5">
  <h1 class="text-xl font-light text-center my-6">ACCOUNT DETAILS</h1>
  <div class="flex max-w-7xl mx-auto">
    <div class="hidden md:block flex-none">
      @include('user.layouts.accountSidebar')
    </div>
    <div class="px-5 md:px-20 grow">
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="pb-5">ID</th>
            <th class="pb-5"></th>
            <th class="pb-5">PRODUCT</th>
            <th class="pb-5">DATE</th>
            <th class="pb-5">QUANTITY</th>
            <th class="pb-5">PRICE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center px-3">01</td>
            <td class="w-[200px]"><img src="img/home-img/home-img-3.jpg" alt="" class="w-full"></td>
            <td class="text-center">Ghế gỗ</td>
            <td class="text-center">08/03/2022</td>
            <td class="text-center">1</td>
            <td class="text-center">1.500.000đ</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection


