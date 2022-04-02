@extends('admin.layouts.app')
@section('title', 'PRODUCT')
@section('content')
  <div>
    <h1>PRODUCTS</h1>
    <a href="{{ route('admin.products.create')}}">ADD</a>
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
            <td class="py-3">{{$product->id}}</td>
            <td class="py-3">{{$product->catalog->name}}</td>
            <td class="py-3">{{$product->title}}</td>
            <td class="py-3">{{$product->price}}</td>
            <td class="py-3">{{$product->description}}</td>
            <td class="py-3">{{$product->details}}</td>
            <td class="py-3 flex items-center justify-center">
              <img src="{{asset('uploads/products-img/'.$product->thumbnail)}}" class="w-[50px] h-[50px]" alt="">
            </td>
            <td class="py-3">{{$product->sku}}</td>
            <td class="py-3">{{$product->stock}}</td>
            <td class="py-3">
              <a href="{{route('admin.products.edit',$product->id )}}" class="hover:underline inline px-3">EDIT</a>
              <form action="{{route('admin.products.destroy',$product->id )}}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline">
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
