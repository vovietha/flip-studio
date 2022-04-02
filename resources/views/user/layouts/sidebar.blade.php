<div class="hidden md:flex flex-col space-y-5">
  <h1 class="font-medium text-md">ALL CATEGORIES</h1>
  <div>
    <div class="flex flex-col space-y-3 text-sm">
      @foreach($catalogs as $catalog)  
        <a href="{{url('shop/'.$catalog->id)}}" class="hover:underline {{request()->is('all') ? 'active' : ''}}">{{$catalog->name}}</a>
      @endforeach
      {{-- <a href="/shop/{name}" class="hover:underline {{request()->is('armchairs/*') ? 'active' : ''}}">ARMCHAIRS</a>
      <a href="/loveseats/*" class="hover:underline {{request()->is('loveseats/*') ? 'active' : ''}}">LOVESEAT</a>
      <a href="/corner-sofas/*" class="hover:underline {{request()->is('corner-sofas/*') ? 'active' : ''}}">CORNER SOFAS</a>
      <a href="/ottomans-footstools/*" class="hover:underline {{request()->is('ottomans-footstools/*') ? 'active' : ''}}">OTTOMANS - FOOTSTOOLS</a>
      <a href="/beds/*" class="hover:underline {{request()->is('beds/*') ? 'active' : ''}}">BEDS</a>
      <a href="/sofabed-daybed/*" class="hover:underline {{request()->is('sofabed-daybed/*') ? 'active' : ''}}">SOFABED - DAYBED</a>
      <a href="/dining-chairs/*" class="hover:underline {{request()->is('dining-chairs/*') ? 'active' : ''}}">DINING CHAIRS</a>
      <a href="/set-products/*" class="hover:underline {{request()->is('set-products/*') ? 'active' : ''}}">COMBO</a> --}}
    </div>
  </div>
</div>