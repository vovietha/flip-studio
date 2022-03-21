<div class="p-10 border-solid h-full border-r-[1px] space-y-10">
  <div>
    <a  href="/admin/dashboard" class="font-bold text-5xl">F .</a>
  </div>
  <div class="space-y-5 flex flex-col text-sm tracking-wider">
    <div>
      
    </div>
    <a href="/admin/dashboard" class="{{request()->is('admin/dashboard') ? 'active' : ''}}">DASHBOARD</a>
    <a href="/admin/products" class="{{request()->is('admin/products') ? 'active' : ''}}">PRODUCTS</a>
    <a href="/admin/categories" class="{{request()->is('admin/categories') ? 'active' : ''}}" >CATEGORIES</a>
    <a href="/admin/parameter-sets" class="{{request()->is('admin/parameter-sets') ? 'active' : ''}}">PARAMETER SETS</a>
    <a href="/admin/collections" class="{{request()->is('admin/collections') ? 'active' : ''}}">COLLECTIONS</a>
    <a href="/admin/accounts" class="{{request()->is('admin/accounts') ? 'active' : ''}}">ACCOUNTS</a>
  </div>
  <div class="fixed bottom-0 py-5 tracking-wider">
    <div class="flex items-center space-x-2 py-3">
      <div class="rounded-full bg-black w-5 h-5">
      </div>
      <p class="text-xs">SONBILL</p>
    </div>
    <a href="#">LOGOUT</a>
  </div>
</div>