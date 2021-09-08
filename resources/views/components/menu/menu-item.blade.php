@props(['to' => '#', 'icon' => '', 'active' => false])
@php
    $classActive = $active == 'true' ?  'border-b-2 border-pink-600 ' : 'hover:border-pink-500';  
@endphp
<li class="mr-6 my-2 md:my-0">
    <a href="{{$to}}" {{$attributes->merge(['class' => 'block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 '.$classActive])}}>
      <i class="fas fa-{{$icon}} fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">{{ $slot }}</span>
    </a>
</li>