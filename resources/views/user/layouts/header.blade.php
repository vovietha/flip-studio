<nav class="bg-white">
  <div class="max-w-7xl mx-auto px-2">
    <div class="flex justify-between items-center">
      {{-- LOGO --}}
      <div>
        <a href="#" class="text-xl font-bold px-3">FLIP.STUDIO</a>
      </div>
      {{-- PRIMARY NAV --}}
      <div class="hidden md:flex space-x-3 text-sm">
        <a href="#" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100">COLLECTIONS</a>
        <a href="#" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100">SHOP</a>
        <a href="#" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-3 transition duration-100">ABOUT</a>
      </div>
      {{-- SECONDARY NAV --}}
      <div class="hidden md:flex text-sm">
        <a href="#" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100">ACCOUNT</a>
        <a href="#" class="hover:underline text-gray-500 hover:text-gray-900 py-4 px-2 transition duration-100">BAG</a>
      </div>
      {{-- MOBILE BUTTON --}}
      <div class="mobile-menu-button md:hidden flex items-center py-4">
        <button>
          <i class="far fa-bars w-6 h-6"></i>
        </button>
      </div>
    </div>
  </div>
  {{-- MOBILE MENU --}}
  <div class="mobile-menu hidden">
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">COLLECTIONS</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">SHOP</a>
    <a href="#" class="block py-2 px-4 text-sm hover:bg-gray-200">ABOUT</a>
  </div>
</nav>
