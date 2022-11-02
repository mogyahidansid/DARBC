@props(['active'])

@php
$classes = ($active ?? false) 
            ? 'flex items-center space-x-3 cursor-pointer p-2.5 rounded-md text-[#2A027B] bg-[#2A027B]/[8%] p-2.5 rounded-md'
            : 'flex items-center space-x-3 cursor-pointer p-2.5 rounded-md text-[#494949]';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>