@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
  <div>
    @if(session('status')) 
      <div class="bg-green-700 text-white w-full flex items-center justify-center text-sm">
        <span class="material-icons mr-1">
          check
        </span>
       {{ session('status') }}
      </div>
    @endif
    <h1>CREATE NEW PRODUCT</h1>
    <div class="min-w-full">
      <form action="{{route(('admin.products.store'))}}" method="POST" enctype="multipart/form-data" class="w-full space-y-4 py-5">
        @csrf
        <div class="flex flex-col space-y-3 ">
          <label for="category" class="text-xs">CATEGORY</label>
          <select  name="cate_id" id="category" class="form-control border-solid border-[1px] py-2 px-3">
            <option selected>SELECT CATEGORY</option>
            @foreach($catalogs as $catalog)
                <option 
                  value="{{$catalog->id}}" 
                  @if(request()->query('category') == $catalog->id) selected @endif
                >
                  {{$catalog->name}}
                </option>
              @endforeach
          </select>
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="title" class="text-xs">TITLE: </label>
          <input type="text" name="title" id="title" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="desc" class="text-xs">DESCRIPTION: </label>
          <input type="text" name="desc" id="desc" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="price" class="text-xs">PRICE: </label>
          <input type="text" name="price" id="price" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="detail" class="text-xs">DETAILS: </label>
          <input type="text" name="detail" id="detail" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="thumbnail_id" class="text-xs">THUMBNAIL: </label>
          <input type="file" name="thumbnail_id" id="thumbnail_id" class="border border-[#ccc] h-[35px] text-[12px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-1">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="sku" class="text-xs">SKU: </label>
          <input type="text" name="sku" id="sku" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <div class="flex flex-col space-y-3 ">
          <label for="stock" class="text-xs">STOCK: </label>
          <input type="text" name="stock" id="stock" class="border border-[#ccc] h-[35px] text-[16px] mb-[20px] md:m-0 focus:outline-black focus:invalid:border-red w-full p-2 md:p-5">
        </div>
        <button type="submit" class="w-full p-[5px] bg-black text-white items-center transition-all hover:bg-[#323232] duration-200 tracking-widest">ADD NEW</button>
      </form>
    </div>
  </div>
@endsection