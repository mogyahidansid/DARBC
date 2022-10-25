@props([
    'cardTitle',
    'statCount'
])

<div class="bg-white border flex flex-col justify-between p-3 rounded-md">
    {{ $slot }}
    <section>
        <h1 class="text-4xl text-custom-blue font-bold">{{ $statCount }}</h1>
        <p class="text-[#696969] font-medium">{{ $cardTitle }}</p>
    </section>
</div>