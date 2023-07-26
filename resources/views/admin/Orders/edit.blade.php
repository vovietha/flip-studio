@extends('admin.layouts.app')
@section('title', 'ORDER DETAIL')
@section('content')

<div>
    <h1>Order Details</h1>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->user->fname }}</p>
    <p><strong>Email:</strong> {{ $order->user->email }}</p>
    <!-- Display other customer information if needed -->
    
    <h2>Order Items:</h2>
    @foreach($order->orderitems as $item)
        <p><strong>Product:</strong> {{ $item->product_id }}</p>
        <p><strong>Quantity:</strong> {{ $item->qty }}</p>
        <p><strong>Price:</strong> {{ $item->price }}</p>
        <!-- Display other order item information if needed -->
    @endforeach
</div>
@endsection
