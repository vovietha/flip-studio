@extends('admin.layouts.app')
@section('title', 'PRODUCT')
@section('content')
  <div>
    <div class="flex items-center justify-between">
      <h1 class="font-bold">PRODUCTS</h1>
      <a href="{{ route('admin.products.create')}}" class="border hover:bg-gray-200 py-2 px-3">Create</a>
    </div>
    <div>
      <table class="w-full">
        <thead class="border-solid border-b-[1px]">
          <tr>
            <th class="font-medium py-3">ID</th>
            <th class="font-medium py-3">CATEGORY</th>
            <th class="font-medium py-3">TITLE</th>
            <th class="font-medium py-3">PRICE</th>
            <th class="font-medium py-3">DESCRIPTION</th>
            <th class="font-medium py-3">DETAIL</th>
            <th class="font-medium py-3">IMAGE</th>
            <th class="font-medium py-3">SKU</th>
            <th class="font-medium py-3">IN STOCK</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr class="text-center text-sm">
            <td class="">{{$product->id}}</td>
            <td class="">{{$product->catalog->name}}</td>
            <td class="">{{$product->title}}</td>
            <td class="">{{$product->price}}</td>
            <td class="">{{$product->description}}</td>
            <td class="">{{$product->details}}</td>
            <td class=" flex items-center justify-center">
              <img src="{{asset('uploads/products-img/'.$product->thumbnail)}}" class="w-[50px] h-[50px]" alt="">
            </td>
            <td class="">{{$product->sku}}</td>
            <td class="">{{$product->stock}}</td>
            <td class="">
              <a href="{{route('admin.products.edit',$product->id )}}" class="hover:underline px-3">EDIT</a>
              <form action="{{route('admin.products.destroy',$product->id )}}" method="POST" class="">
                @csrf
                @method('DELETE')
                <button type="submit" class="">
                  <span class="material-icons">
                    highlight_off
                  </span>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
@endsection
