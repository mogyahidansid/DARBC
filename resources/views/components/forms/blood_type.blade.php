<div class="flex flex-col items-start space-y-1 z-[9999]">
    <label for="" class="font-semibold">Blood Type</label>
    <div {{ $attributes->merge(['class' => 'relative bg-gray-200 rounded-md border px-3 flex items-center space-x-2']) }}
        x-data="{showDropdown : false}">

        <!-- Custom select input -->
        <button class="bg-transparent rounded-md flex items-center cursor-pointer py-1.5 justify-between w-full"
            @click="showDropdown = ! showDropdown" @click.away="showDropdown = false">
            <span>Please select blood type</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path d="M12 14l-4-4h8z" />
            </svg>
        </button>

        <!-- Dropdown content-->
        <div class="bg-white w-full rounded-md flex items-center cursor-pointer absolute right-0 bottom-0 z-[9999] shadow-md border"
            x-show="showDropdown" x-cloak x-transition.scale.origin.top>
            <ul class="w-full">
                <x-forms.dropdown-content content='A+' />
                <x-forms.dropdown-content content='A-' />
                <x-forms.dropdown-content content='B+' />
                <x-forms.dropdown-content content='B-' />
                <x-forms.dropdown-content content='O+' />
                <x-forms.dropdown-content content='O-' />
                <x-forms.dropdown-content content='AB+' />
                <x-forms.dropdown-content content='AB-' />
            </ul>
        </div>
    </div>
</div>