@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
  <div>
    <h1>CATEGORIES</h1>
    <div>
      <div class="flex justify-between">
        <form method="GET">
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
        </form>
        <a class="py-2 px-3 border-solid border-[1px] bg-black text-white" 
        href="{{ route('admin.catalogs.create')}}"
        >
          ADD
        </a>
      </div>
      {{-- TABLE --}}
      <div class="py-10">
        @if (request()->query('category') && $catalogs->find(request()->query('category'))->children()->exists())
        <table class="w-full">
          <thead class="border-solid border-b-[1px]">
            <tr>
              <th class="font-medium py-3">ID</th>
              <th class="font-medium py-3">NAME</th>
              <th class="font-medium py-3">DETAIL</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($catalogs->find(request()->query('category'))->children as $child)
            <tr class="text-center text-sm">
              <td class="py-3">{{$child->id}}</td>
              <td class="py-3">{{$child->name}}</td>
              <td class="py-3">{{$child->detail}}</td>
              <td>
                <form action="{{route('admin.catalogs.destroy',$child->id )}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit">
                    <span class="material-icons">
                      highlight_off
                    </span>
                  </button>
                </form>
                {{-- <a href="{{route('admin.catalogs.destroy',$child->id )}}">  --}}
                {{-- </a> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @else 
        <div class="p-10 flex items-center justify-center">
          <h1 class="text-[#ccc]">NONE</h1>
        </div>
        @endif
      </div>
    </div>
  </div>
@endsection