@props(['type'=> 'info'])

@php
    switch ($type) {
        case 'info':
            
            $class ="bg-blue-100 border-t border-b border-blue-500 text-blue-700";

            break;

        case 'danger':
            $class ="bg-red-100 border-t border-b border-red-500 text-red-700";
            break;

        case 'success':
            $class ="bg-green-100 border-t border-b border-green-500 text-green-700";
            break;

        case 'warning':
            $class ="bg-yellow-100 border-t border-b border-yellow-500 text-yellow-700";
            break;

        case 'dark':
            $class ="bg-gray-100 border-t border-b border-gray-500 text-gray-700";
            break;
        
        default:
            $class ="bg-blue-100 border-t border-b border-blue-500 text-blue-700";
            break;
    };        
@endphp


<div {{ $attributes->merge(['class' => 'px-4 py-3 ' . $class]) }} role="alert">
  <p class="font-bold">{{ $title ?? 'info Alert!'}}</p>
  <p class="text-sm">{{ $slot }}</p>
  <p>{{ $attributes }}</p>
</div>

