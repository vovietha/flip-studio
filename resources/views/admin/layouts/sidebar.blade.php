<div class="p-3 sm:p-6 md:p-10 border-solid h-full border-r-[1px] space-y-10">
  <div class="text-center">
    <a  href="/admin/dashboard" class="font-bold text-5xl tracking-wider">F.</a>
  </div>
  <div class="space-y-5 flex flex-col text-sm tracking-wider">
    <div class="flex justify-center md:justify-start">
      <a href="/admin/dashboard" class="{{request()->is('admin/dashboard') ? 'active' : ''}} hidden md:block">DASHBOARD</a>
      <a href="/admin/dashboard" class="block md:hidden {{request()->is('admin/dashboard') ? 'mobile-active' : ''}}">
        <img src="/img/dashboard-icon/dashboard_black_24dp.svg" alt="">
      </a>
    </div>
    <div class="flex justify-center md:justify-start">
      <a href="/admin/categories" class="{{request()->is('admin/categories') ? 'active' : ''}} hidden md:block" >CATEGORIES</a>
      <a href="/admin/categories" class="block md:hidden {{request()->is('admin/categories') ? 'mobile-active' : ''}}">
        <img src="/img/dashboard-icon/category_black_24dp.svg" alt="">
      </a>
    </div>
    <div class="flex justify-center md:justify-start">
      <a href="/admin/products" class="{{request()->is('admin/products') ? 'active' : ''}} hidden md:block">PRODUCTS</a>
      <a href="/admin/products" class="block md:hidden {{request()->is('admin/products') ? 'mobile-active' : ''}}">
        <img src="/img/dashboard-icon/shopping_basket_black_24dp.svg" alt="">
      </a>
    </div>
    <div class="flex justify-center md:justify-start">
      <a href="/admin/collections" class="{{request()->is('admin/collections') ? 'active' : ''}} hidden md:block">COLLECTIONS</a>
      <a href="/admin/collections" class="block md:hidden {{request()->is('admin/collections') ? 'mobile-active' : ''}}">
        <img src="/img/dashboard-icon/collections_black_24dp.svg" alt="">
      </a>
    </div>
    <div class="flex justify-center md:justify-start">
      <a href="/admin/parameter-sets" class="{{request()->is('admin/parameter-sets') ? 'active' : ''}} hidden md:block">PARAMETER SETS</a>
      <a href="/admin/parameter-sets" class="block md:hidden {{request()->is('admin/parameter-sets') ? 'mobile-active' : ''}}">
        <img src="/img/dashboard-icon/tune_black_24dp.svg" alt="">
      </a>
    </div>
    <div class="flex justify-center md:justify-start">
      <a href="/admin/accounts" class="{{request()->is('admin/accounts') ? 'active' : ''}} hidden md:block">ACCOUNTS</a>
      <a href="/admin/accounts" class="block md:hidden {{request()->is('admin/accounts') ? 'mobile-active' : ''}}">
        <img src="/img/dashboard-icon/manage_accounts_black_24dp.svg" alt="">
      </a>
    </div>
  </div>
  <div class="fixed left-6 md:left-5 bottom-0 py-5 md:p-5 tracking-wider flex flex-col justify-center md:justify-start">
    <div class="items-center space-x-2 py-3 md:flex">
      <div class="rounded-full bg-black w-5 h-5">
      </div>
      <p class="text-xs hidden md:block">SONBILL</p>
    </div>
    <div>
      <a href="#" class="hidden md:block hover:underline">LOGOUT</a>
      <a href="" class="block md:hidden ">
        <img src="/img/dashboard-icon/logout_black_24dp.svg" alt="">
      </a>
    </div>
  </div>
</div>