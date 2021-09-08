<div x-data="{ open: false }">
  <nav id="header" class="bg-white w-full z-10 top-0 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">
      <div class="w-1/2 pl-2 md:pl-0">
        <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="#">
          <i class="fas fa-sun text-pink-600 pr-3"></i> Tara
        </a>
      </div>
      <div class="w-1/2 pr-0">
        <div class="flex relative inline-block float-right">
          <x-menu.dropdown.dropdown-user>
            <x-slot name="items">
              <x-menu.dropdown.item-dropdown to="#">My account</x-menu.dropdown.item-dropdown>
              <x-menu.dropdown.item-dropdown to="#">Notifications</x-menu.dropdown.item-dropdown>
              <hr class="border-t mx-2 border-gray-400">
              <x-menu.dropdown.item-dropdown to="#">Logout</x-menu.dropdown.item-dropdown>
            </x-slot>
          </x-menu.dropdown.dropdown-user>
          <div class="block lg:hidden pr-4">
            <button x-on:click="open = !open" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
              <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto lg:block hidden mt-2 lg:mt-0 bg-white z-20">
        <ul class="list-reset flex flex-1 items-center px-4">
          <x-menu.menu-item to="#" icon="home" >Home</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="tasks">Tasks</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="envelope" active="true">Messages</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="chart-area">Analytics</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="wallet">Payments</x-menu.menu-item>
        </ul>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto lg:block mt-2 lg:mt-0 bg-white z-20 transition-all	duration-200 ease-in-out" x-show="open" x-transition.origin.center.top>
        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
          <x-menu.menu-item to="#" icon="home">Home</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="tasks" active="true">Tasks</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="envelope">Messages</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="chart-area">Analytics</x-menu.menu-item>
          <x-menu.menu-item to="#" icon="wallet">Payments</x-menu.menu-item>
        </ul>
        <div class="relative pull-right pl-4 pr-4 md:pr-0">
          <input type="search" placeholder="Search" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
          <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
            <svg class="fill-current pointer-events-none text-gray-800 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
