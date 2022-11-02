@props([
    'buttonContent',
])

<a {{ $attributes->merge(['class' => 'flex items-center space-x-2 py-2.5 px-3 rounded cursor-pointer']) }}>
    {{ $slot }}
    <span class = 'font-medium group'>{{ $buttonContent }}</span>
</a>