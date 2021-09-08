<x-template-layout>
  <div class="grid md:grid-cols-3 grid-cols-1 lg:gap-6 md:gap-4 gap-2">
    <div>
      <x-dashboard.stat-square primaryIcon="wallet" secondaryIcon="caret-up" themeColor="green">
        <x-slot name="title">
          Total Revenue
        </x-slot>
        <x-slot name="stat">
          ${{number_format(3249,2)}}
        </x-slot>
      </x-dashboard.stat-square>
    </div>
    <div>
      <x-dashboard.stat-square primaryIcon="users" secondaryIcon="exchange-alt" themeColor="pink">
        <x-slot name="title">
          Total Users
        </x-slot>
        <x-slot name="stat">
          ${{number_format(249,2)}}
        </x-slot>
      </x-dashboard.stat-square>
    </div>
    <div>
      <x-dashboard.stat-square  primaryIcon="users" secondaryIcon="exchange-alt" themeColor="pink">
        <x-slot name="title">
          Total Users
        </x-slot>
        <x-slot name="stat">
          ${{number_format(249,2)}}
        </x-slot>
      </x-dashboard.stat-square>
    </div>
  </div>
  <hr class="border-b-2 border-gray-400 my-8 mx-4">          
  <h1>Hola</h1>
  <h1>Que rollo we</h1>
</x-template-layout>
