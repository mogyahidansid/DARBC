@props([
    'label' => null,
    'type' => 'text',
    'placeholder' => null,
])

<div class="flex flex-col items-start space-y-1">
    <label for="" class="font-semibold">{{ $label }}</label>
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'p-2 w-[18rem] rounded-md border bg-white'])}}>
</div>