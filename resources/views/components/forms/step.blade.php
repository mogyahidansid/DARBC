@props([
    'title',
    'description'
])

<li class="relative pb-10">
    <!-- Complete Step -->
    <a href="#" class="group relative flex items-start justify-between">
        <span class="ml-4 flex min-w-0 flex-col">
            <span class=" font-medium">{{ $title }}</span>
            <span class=" text-gray-500">{{ $description }}</span>
        </span>
        <span class="flex h-9 items-center">
            <span
                class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full bg-custom-blue group-hover:bg-custom-blue/80">
                <!-- Heroicon name: mini/check -->
                <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </span>
    </a>
    <div class="absolute top-4 right-4 -ml-px h-full w-0.5 bg-indigo-600" aria-hidden="true"></div>
</li>