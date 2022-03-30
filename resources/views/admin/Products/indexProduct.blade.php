@extends('admin.layouts.app')
@section('title', 'PRODUCT')
@section('content')
  <div>
    <h1>PRODUCTS</h1>
    <a href="{{ route('admin.products.create')}}">ADD</a>
    
    
  </div>
@endsection
