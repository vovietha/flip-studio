@extends('admin.layouts.app')
@section('title', 'ORDER')
@section('content')
  <div>
    <h1>ORDER</h1>
    <div>
      <table class="w-full">
        <thead class="border-solid border-b-[1px]">
          <tr>
            <th class="font-medium py-3">ORDER DATE</th>
            <th class="font-medium py-3">TRACKING NUMBER</th>
            <th class="font-medium py-3">TOTAL PRICE</th>
            <th class="font-medium py-3">STATUS</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)
            <tr class="text-center text-sm">
              <td class="py-3">
                <a  href="{{ route('admin.orders.edit', ['order' => $order->id]) }}">{{ $order->created_at }}</a>
              </td>
              <td class="py-3">{{ $order->tracking_number }}</td>
              <td class="py-3">{{ $order->total_price }}</td>
              <td class="text-center px-3">{{ $order->status == '0' ? 'PENDING' : 'COMPLETE' }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
