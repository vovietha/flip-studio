@extends('user.layouts.app')
@section('title', 'Profile')
@section('content')
  <h1 class="text-xl font-light text-center">ACCOUNT DETAILS</h1>
  <div class="flex max-w-7xl mx-auto px-2">
    @include('user.layouts.accountSidebar')
    @include('user.orderedHistory')
  </div>
@endsection


