<nav class="bg-white">
  <div class="max-w-7xl mx-auto px-2">
    <div class="flex justify-between items-center">
      {{-- MOBILE BUTTON --}}
      <div class="md:hidden flex items-center py-4">
        <button class="mobile-menu-button">
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
        <a href="/collections" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100">COLLECTIONS</a>
        <a href="/shop" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100">SHOP</a>
        <a href="#" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100">ABOUT</a>
      </div>
      {{-- SECONDARY NAV --}}
      <div class="hidden md:flex text-sm">
        <a href="/login" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100">ACCOUNT</a>
        <a href="/cart" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100">BAG</a>
      </div>
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
  <div class="mobile-menu hidden md:hidden">
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">COLLECTIONS</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">SHOP</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">ABOUT</a>
  </div>
</nav>
