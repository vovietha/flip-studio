@extends('admin.layouts.app')
@section('title', 'EDIT ACCOUNT')
@section('content')
  <div>
    <h1>EDIT ACCOUNT</h1>
    <div class="min-w-full">
      <form action="{{route('admin.products.update',$products->id )}}" method="POST" ecctype="multipart/form-data" class="w-full space-y-4 py-5">
        @csrf
        @method('PUT')
        {{-- <div class="flex flex-col space-y-3 ">
          <label for="catalog_id" class="text-xs">CATEGORY</label>
          <select  name="catalog_id" id="catalog_id" class="form-control border-solid border-[1px] py-2 px-3">
            <option selected>SELECT CATEGORY</option>
            @foreach($catalogs as $catalog)
                <option 
                  value="{{$catalog->id}}" 
                  @if(request()->query('catalog_id') == $catalog->id) selected @endif
                >
                  {{$catalog->name}}
                </option>
              @endforeach
          </select>
        </div> --}}
        {{-- <form method="GET">
          @csrf
          <select  name="category" id="category" class="form-control border-solid border-[1px] py-2 px-3">
            <option>. . .</option>
              @foreach($catalogs as $catalog)
                <option 
                  value="{{$catalog->id}}" 
                  @if(request()->query('category') == $catalog->id) selected @endif
                >
                  {{$catalog->name}}
                </option>
              @endforeach
          </select>
          <button type="submit" class="py-2 px-3 border-solid border-[1px]">Select</button>
        </form> --}}
        <div class="flex flex-col space-y-3 ">
          <label for="title" class="text-xs">TITLE: </label>
          <input type="text" name="title" id="title" placeholder="{{$products->title}}" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="description" class="text-xs">DESCRIPTION: </label>
          <input type="text" name="description" id="description" placeholder="{{$products->description}}" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="price" class="text-xs">PRICE: </label>
          <input type="text" name="price" id="price" placeholder="{{$products->price}}" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="details" class="text-xs">DETAILS: </label>
          <input type="text" name="details" id="details" placeholder="{{$products->details}}" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="thumbnail" class="text-xs">THUMBNAIL: </label>
          <input type="file" name="thumbnail" id="thumbnail" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-1">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="sku" class="text-xs">SKU: </label>
          <input type="text" name="sku" id="sku" placeholder="{{$products->sku}}" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="stock" class="text-xs">STOCK: </label>
          <input type="text" name="stock" id="stock" placeholder="{{$products->stock}}" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <button type="submit" class="w-full p-[5px] border-solid border-[1px] bg-black text-white items-center transition-all hover:bg-[#323232] duration-200 tracking-widest">SAVE</button>
      </form>
      <a href="{{route('admin.products.index')}}" class="w-full block p-[5px] border-solid border-[1px] bg-white text-black items-center transition-all hover:border-black duration-200 tracking-widest text-center">BACK</a>
    </div>
  </div>
@endsection