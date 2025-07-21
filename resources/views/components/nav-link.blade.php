@props(['active' => false])

<a class="{{ $active ? 'text-blue-400' : 'text-white-300' }} hover:text-blue-400"
   aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}
>
    {{ $slot }}
</a>