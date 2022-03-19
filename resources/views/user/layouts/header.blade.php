<nav class="fixed w-full z-[1000] bg-white">
  <div class="max-w-7xl mx-auto px-3">
    <div class="flex justify-between items-center">
      {{-- MOBILE BUTTON --}}
      <div class="md:hidden flex items-center py-3">
        <button class="mobile-open-menu">
          <span class="material-icons">
            menu
          </span>
        </button>
      </div>
      {{-- LOGO --}}
      <div>
        <a href="/" class="text-xl font-bold tracking-wide">FLIP.STUDIO</a>
      </div>
      {{-- PRIMARY NAV --}}
      <div class="hidden md:flex space-x-3 text-sm">
        <a href="/collections" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100 {{request()->is('collections') ? 'active' : ''}}">COLLECTIONS</a>
        <a href="/shop" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100 {{request()->is('shop') ? 'active' : ''}}">SHOP</a>
        <a href="#" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100">ABOUT</a>
      </div>
      {{-- SECONDARY NAV --}}
      @auth
      <div class="hidden md:flex text-sm">
        <div class="group relative cursor-auto hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100 {{request()->is('login') ? 'active' : ''}}">
          ACCOUNT
          <div class="group-hover:flex flex-col z-10 hidden bg-white absolute top-10 space-y-4 p-5">
            <div class="flex justify-between space-x-2">
              <a href="/profile" class="hover:underline flex items-center justify-between text-gray-500 whitespace-nowrap hover:text-gray-900 transition duration-100 {{request()->is('profile') ? 'active' : ''}}">
                PROFILE</a>
              <span class="material-icons">perm_identity</span>
            </div>
            <div class="flex justify-between space-x-2">
              <a href="/ordered-history" class="hover:underline flex items-center justify-between text-gray-500 whitespace-nowrap hover:text-gray-900  transition duration-100 {{request()->is('ordered-history') ? 'active' : ''}}">ORDER HISTORY</a>
              <span class="material-icons">list_alt</span>
            </div>
            <div class="flex justify-between space-x-2">
              <a href="{{route('logout')}}" class="hover:underline flex items-center justify-between text-gray-500 whitespace-nowrap hover:text-gray-900  transition duration-100 {{request()->is('logout') ? 'active' : ''}}">LOG OUT </a>
              <span class="material-icons">logout</span>
            </div>
          </div>
        </div>
        <a href="/cart" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100 {{request()->is('cart') ? 'active' : ''}}">BAG</a>
      </div>
      @else
      <div class="hidden md:flex text-sm">
        <a href="/login" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100 {{request()->is('login') ? 'active' : ''}}">ACCOUNT</a>
        <a href="/cart" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100 {{request()->is('cart') ? 'active' : ''}}">BAG</a>
      </div>
      @endauth
      {{-- CART --}}
      <div class="mobile-cart flex md:hidden">
        <a href="/cart">
          <span class="material-icons">
            shopping_bag
          </span>
        </a>
      </div>
    </div>
  </div>
  {{-- MOBILE MENU --}}
  <div class="mobile-menu bg-white hidden md:hidden top-[52px] translate-x-[-100%] transition duration-300 fixed h-full w-full space-y-4">
    <button class="mobile-close-menu flex ml-auto grow-1 py-2 px-4">
      <span class="material-icons">
        close
        </span>
    </button>
    @auth
    <a href="/collections" class="block py-2 px-4 text-sm hover:bg-gray-200">COLLECTIONS</a>
    <a href="/shop" class="block py-2 px-4 text-sm hover:bg-gray-200">SHOP</a>
    <a href="/about" class="block py-2 px-4 text-sm hover:bg-gray-200">ABOUT</a>
    <div class="group block py-2 px-4 text-sm hover:bg-gray-200">
      <div class="group-hover:flex flex-col md:relative block hover:bg-gray-200 {{request()->is('login') ? 'active' : ''}}">
      ACCOUNT
        <div class="group-hover:flex flex-col z-10 hidden w-[200px] h-full md:absolute top-10 space-y-5 p-5">
          <a href="/profile" class="hover:underline text-gray-500 hover:text-gray-900 transition duration-100 {{request()->is('profile') ? 'active' : ''}}">PROFILE</a>
          <a href="/ordered-history" class="hover:underline text-gray-500 hover:text-gray-900  transition duration-100 {{request()->is('ordered-history') ? 'active' : ''}}">ORDER HISTORY</a>
          <a href="{{route('logout')}}" class="hover:underline text-gray-500 hover:text-gray-900  transition duration-100 {{request()->is('logout') ? 'active' : ''}}">LOG OUT</a>
        </div>
      </div>
    </div>
    <a href="/cart" class="block py-2 px-4 text-sm hover:bg-gray-200">BAG</a>
    @else
    <a href="/collections" class="block py-2 px-4 text-sm hover:bg-gray-200">COLLECTIONS</a>
    <a href="/shop" class="block py-2 px-4 text-sm hover:bg-gray-200">SHOP</a>
    <a href="/about" class="block py-2 px-4 text-sm hover:bg-gray-200">ABOUT</a>
    <a href="/login" class="block py-2 px-4 text-sm hover:bg-gray-200">ACCOUNT</a>
    <a href="/cart" class="block py-2 px-4 text-sm hover:bg-gray-200">BAG</a>
    @endauth
  </div>
</nav>
