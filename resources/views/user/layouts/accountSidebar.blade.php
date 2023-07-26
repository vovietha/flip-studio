<div>
  <ul class="space-y-5 px-10 border-r">
    <li class="hover:underline flex items-center justify-between  whitespace-nowrap hover:text-gray-900 transition duration-10 {{request()->is('profile') ? 'active' : ''}}"><a href="/profile">PROFILE</a></li>
    <li><a href="/ordered-history" class="hover:underline flex items-center justify-between  whitespace-nowrap hover:text-gray-900 transition duration-10 {{request()->is('ordered-history') ? 'active' : ''}}">ORDER HISTORY</a></li>
    <li><a href="{{route('logout')}}">LOG OUT</a></li>
  </ul>
</div>