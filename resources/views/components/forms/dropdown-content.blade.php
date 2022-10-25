@props(['content'])

<li {{ $attributes->merge(['class' => 'px-2 py-1 hover:bg-custom-blue hover:text-white']) }}>{{ $content }}</li>