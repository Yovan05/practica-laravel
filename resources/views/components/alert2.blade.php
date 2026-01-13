<div {{ $attributes->merge(['class' => 'px-4 py-3 ' . $class]) }} role="alert">
  <p class="font-bold">{{ $title ?? 'info Alert!'}}</p>
  <p class="text-sm">{{ $slot }}</p>
</div>