<div class="hidden md:flex flex-col">
  <h1 class="font-medium text-lg">ALL CATEGORIES</h1>
  <div>
    <div class="flex flex-col">
      <a href="/all" class="{{request()->is('all') ? 'active' : ''}}">ALL PRODUCTS</a>
      <a href="/armchairs/*" class="{{request()->is('armchairs/*') ? 'active' : ''}}">ARMCHAIRS</a>
      <a href="/loveseats/*" class="{{request()->is('loveseats/*') ? 'active' : ''}}">LOVESEAT</a>
      <a href="/corner-sofas/*" class="{{request()->is('corner-sofas/*') ? 'active' : ''}}">CORNER SOFAS</a>
      <a href="/ottomans-footstools/*" class="{{request()->is('ottomans-footstools/*') ? 'active' : ''}}">OTTOMANS - FOOTSTOOLS</a>
      <a href="/beds/*" class="{{request()->is('beds/*') ? 'active' : ''}}">BEDS</a>
      <a href="/sofabed-daybed/*" class="{{request()->is('sofabed-daybed/*') ? 'active' : ''}}">SOFABED - DAYBED</a>
      <a href="/dining-chairs/*" class="{{request()->is('dining-chairs/*') ? 'active' : ''}}">DINING CHAIRS</a>
      <a href="/set-products/*" class="{{request()->is('set-products/*') ? 'active' : ''}}">COMBO</a>
    </div>
  </div>
</div>