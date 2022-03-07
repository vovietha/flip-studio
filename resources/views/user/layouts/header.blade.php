<nav class="fixed w-full z-[1000] bg-white">
  <div class="max-w-7xl mx-auto px-2">
    <div class="flex justify-between items-center">
      {{-- MOBILE BUTTON --}}
      <div class="md:hidden flex items-center py-4">
        <button class="mobile-open-menu">
          <span class="material-icons">
            menu
          </span>
        </button>
      </div>
      {{-- LOGO --}}
      <div>
        <a href="/" class="text-xl font-bold px-3">FLIP.STUDIO</a>
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
        <div class="group relative hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100 {{request()->is('login') ? 'active' : ''}}">
        ACCOUNT
          <div class="group-hover:flex flex-col z-10 hidden bg-white w-[200px] h-[100px] absolute top-10 space-y-3 p-2">
            <a href="/profile" class="hover:underline text-gray-500 hover:text-gray-900 transition duration-100 {{request()->is('profile') ? 'active' : ''}}">PROFILE</a>
            <a href="/order-history" class="hover:underline text-gray-500 hover:text-gray-900  transition duration-100 {{request()->is('order-history') ? 'active' : ''}}">ORDER HISTORY</a>
            <a href="{{route('logout')}}" class="hover:underline text-gray-500 hover:text-gray-900  transition duration-100 {{request()->is('logout') ? 'active' : ''}}">LOG OUT</a>
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
    <a href="/collections" class="block py-2 px-4 text-sm hover:bg-gray-200">COLLECTIONS</a>
    <a href="/shop" class="block py-2 px-4 text-sm hover:bg-gray-200">SHOP</a>
    <a href="/about" class="block py-2 px-4 text-sm hover:bg-gray-200">ABOUT</a>
    <a href="/login" class="block py-2 px-4 text-sm hover:bg-gray-200">ACCOUNT</a>
    <a href="/bag" class="block py-2 px-4 text-sm hover:bg-gray-200">BAG</a>
  </div>
</nav>
