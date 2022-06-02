@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-gray-900 text-white block px-2 py-2 rounded-b-md no-underline text-base font-medium'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white block px-2  py-2 rounded-b-md no-underline text-base font-medium';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
