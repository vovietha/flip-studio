<div class="p-10 border-solid h-full border-r-[1px] space-y-10">
  <div>
    <h1 class="font-bold text-5xl">F .</h1>
  </div>
  <ul class="space-y-5">
    <li class="hover:underline text-sm  whitespace-nowrap hover:text-gray-900  {{request()->is('dashboard') ? 'active' : ''}}"><a href="/admin/dashboard">DASHBOARD</a></li>
    <li class="hover:underline text-sm  whitespace-nowrap hover:text-gray-900  {{request()->is('products') ? 'active' : ''}}"><a href="/admin/products">PRODUCTS</a></li>
    <li class="hover:underline text-sm  whitespace-nowrap hover:text-gray-900  {{request()->is('categories') ? 'active' : ''}}"><a href="/admin/categories">CATEGORIES</a></li>
    <li class="hover:underline text-sm  whitespace-nowrap hover:text-gray-900  {{request()->is('parameter sets') ? 'active' : ''}}"><a href="/admin/parameter-sets">PARAMETER SETS</a></li>
    <li class="hover:underline text-sm  whitespace-nowrap hover:text-gray-900  {{request()->is('collections') ? 'active' : ''}}"><a href="/admin/collections">COLLECTIONS</a></li>
    <li class="hover:underline text-sm  whitespace-nowrap hover:text-gray-900  {{request()->is('accounts') ? 'active' : ''}}"><a href="/admin/accounts">ACCOUNTS</a></li>
    <li class="hover:underline text-sm  whitespace-nowrap hover:text-gray-900  {{request()->is('logout') ? 'active' : ''}}"><a href="#">LOGOUT</a></li>
  </ul>
</div>