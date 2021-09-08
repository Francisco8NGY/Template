@props(['primaryIcon' => 'inverse', 'secondaryIcon' => 'exchange-alt', 'themeColor' => 'blue',])
<x-dashboard.card-icons>
  <div class="flex-shrink pr-4">
    <div class="rounded p-3 bg-{{$themeColor}}-600"><i class="fas fa-{{$primaryIcon}} fa-2x fa-fw fa-inverse"></i></div>
  </div>
  <div class="flex-1 text-right md:text-center">
    <h5 class="font-bold uppercase text-gray-500">{{ $title }}</h5>
    <h3 class="font-bold text-3xl">{{ $stat }} <span class="text-{{$themeColor}}-500"><i class="fas fa-{{$secondaryIcon}}"></i></span></h3>
  </div>
</x-dashboard.card-icons>