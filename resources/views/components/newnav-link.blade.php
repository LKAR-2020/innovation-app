@props(['active'])

@php
$classes = ($active ?? false)
            ? 'w-full h-2 bottom-0 absolute bg-black transition-width duration-300 ease-in-out '
            : 'w-0 h-2 bottom-0 absolute bg-black transition-width duration-300 ease-in-out group-hover:w-full';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} ></div>
