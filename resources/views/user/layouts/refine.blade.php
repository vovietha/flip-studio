<div class="refine-menu z-[10] hidden fixed h-full w-full bg-white flex-col">
  <div class="px-10 space-y-5">
    <h1 class="font-medium text-lg">SHOW ALL BY: </h1>
    <div class="flex flex-col space-y-3">
      <a href="/all-products" class="hover:underline {{request()->is('all') ? 'active' : ''}}">ALL PRODUCTS</a>
      <a href="shop/armchairs/" class="hover:underline {{request()->is('armchairs/*') ? 'active' : ''}}">ARMCHAIRS</a>
      <a href="/loveseats/" class="hover:underline {{request()->is('loveseats/*') ? 'active' : ''}}">LOVESEAT</a>
      <a href="/corner-sofas/*" class="hover:underline {{request()->is('corner-sofas/*') ? 'active' : ''}}">CORNER SOFAS</a>
      <a href="/ottomans-footstools/*" class="hover:underline {{request()->is('ottomans-footstools/*') ? 'active' : ''}}">OTTOMANS - FOOTSTOOLS</a>
      <a href="/beds/*" class="hover:underline {{request()->is('beds/*') ? 'active' : ''}}">BEDS</a>
      <a href="/sofabed-daybed/*" class="hover:underline {{request()->is('sofabed-daybed/*') ? 'active' : ''}}">SOFABED - DAYBED</a>
      <a href="/dining-chairs/*" class="hover:underline {{request()->is('dining-chairs/*') ? 'active' : ''}}">DINING CHAIRS</a>
      <a href="/set-products/*" class="hover:underline {{request()->is('set-products/*') ? 'active' : ''}}">COMBO</a>
    </div>
  </div>
  <div>
    <button class="refine-close-menu w-full fixed bottom-0 p-3 border-solid border-[1px] border-black bg-white hover:bg-[#EEEEEE]">CANCEL</button>
  </div>
</div>