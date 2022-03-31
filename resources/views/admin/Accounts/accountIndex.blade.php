@extends('admin.layouts.app')
@section('title', 'ACCOUNT')
@section('content')
  <div>
    <h1>ACCOUNT</h1>
    <div>
      <table class="w-full">
        <thead class="border-solid border-b-[1px]">
          <tr>
            <th class="font-medium py-3">ID</th>
            <th class="font-medium py-3">USERNAME</th>
            <th class="font-medium py-3">EMAIL</th>
            <th class="font-medium py-3">CREATED</th>
            <th class="font-medium py-3">UPDATED</th>
            <th class="font-medium py-3"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($accounts as $account)
          <tr class="text-center text-sm">
            <td class="py-3">{{$account->id}}</td>
            <td class="py-3">{{$account->username}}</td>
            <td class="py-3">{{$account->email}}</td>
            <td class="py-3">{{$account->created_at}}</td>
            <td class="py-3">{{$account->updated_at}}</td>
            <td class="py-3 flex items-center space-x-3">
              <a href="" class="hover:underline">EDIT</a>
              <form action="{{route('admin.accounts.destroy',$account->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">
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