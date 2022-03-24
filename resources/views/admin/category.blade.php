@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
  <div>
    <h1>CATEGORIES</h1>
    <div>
      @foreach($catalogs as $catalog)
        <div>
          {{$catalog->id}}
          {{$catalog->name}}
          {{$catalog->detail}}

          @foreach($catalog->children as $child)
            <div>
              {{$child->name}} ({{$child->id}})
            </div>
            
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
@endsection