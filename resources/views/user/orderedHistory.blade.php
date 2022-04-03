@extends('user.layouts.app')
@section('title', 'Ordered history')
@section('content')
  <div class="px-5">
    <h1 class="text-xl font-light text-center my-6">ACCOUNT DETAILS</h1>
    <div class="flex max-w-7xl mx-auto">
      <div class="hidden md:block flex-none">
        @include('user.layouts.accountSidebar')
      </div>
      <div class="px-5 md:px-15 grow">
        <table class="table-auto w-full">
          <thead>
            <tr>
              <th class="pb-5">STATUS</th>
              <th class="pb-5">DATE</th>
              <th class="pb-5">TOTAL PRICE</th>
              <th class="pb-5">TRACKING NUMBER</th>
              <th class="pb-5"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)
              <tr>
                <td class="text-center px-3">{{$order->status == '0' ? 'PENDING' : 'COMPLETE'}}</td>
                <td class="text-center">{{$order->created_at}}</td>
                <td class="text-center">$ {{$order->total_price}}</td>
                <td class="text-center">{{$order->tracking_number}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection


