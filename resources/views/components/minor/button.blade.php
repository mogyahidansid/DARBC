@props([
    'buttonContent',
])

<button {{ $attributes->merge(['class' => 'flex items-center space-x-2 bg-custom-blue py-2.5 px-3 rounded']) }}>
    {{ $slot }}
    <span {{ $attributes->merge(['class' => 'font-medium']) }}>{{ $buttonContent }}</span>
</button>