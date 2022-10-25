<div>
    <x-forms.text_head textContent='Personal Information'/>
    
    <div class="mt-7">
        <div class="flex space-x-3">
            <x-forms.group-inputs label="First name" placeholder="Enter first name" />
            <x-forms.group-inputs label="Middle name" placeholder="Enter middle name" />
            <x-forms.group-inputs label="Surname" placeholder="Enter surname" />
            <x-forms.group-inputs label="Suffix" placeholder="Suffix" class="flex-1" />
        </div>
    
        <div class="flex space-x-3 mt-5">
            <x-forms.group-inputs label="Date of Birth" type="date" placeholder="Enter first name"
                class='bg-gray-200 select-none' />
            <x-forms.group-inputs label="Age" class='bg-gray-200 select-none' disabled />
    
            <div class='flex flex-col flex-1 items-start space-y-1'>
                <label for="" class="font-semibold">Place of Birth</label>
                <input type="text" placeholder="Place of birth" class='p-2 w-full rounded-md border bg-white'>
            </div>
        </div>
    
        <div class="flex space-x-3 mt-5">
            <div class="flex flex-col items-start space-y-1">
                <label for="" class="font-semibold">Gender</label>
                <div class="relative bg-gray-200 rounded-md border px-3 flex items-center space-x-2 w-[18rem]"
                    x-data="{showDropdown : false}">
    
                    <!-- Custom select input -->
                    <button class="bg-transparent rounded-md flex items-center cursor-pointer py-2 justify-between w-full"
                        @click="showDropdown = ! showDropdown" @click.away="showDropdown = false">
                        <span>Please select gender</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 14l-4-4h8z" />
                        </svg>
                    </button>
    
                    <!-- Dropdown content-->
                    <div class="bg-white w-full rounded-md flex items-center cursor-pointer absolute right-0 -bottom-[5.2rem] z-[9999] shadow-md border"
                        x-show="showDropdown" x-cloak x-transition.scale.origin.top>
                        <ul class="w-full">
                            <x-forms.dropdown-content content='Male' />
                            <x-forms.dropdown-content content='Female' />
                        </ul>
                    </div>
                </div>
            </div>
    
            <!-- Blood Type -->
            <x-forms.blood_type/>
    
            <div class='flex flex-col flex-1 items-start space-y-1'>
                <label for="" class="font-semibold">Religion</label>
                <input type="text" placeholder="Religion" class='p-2 w-full rounded-md border bg-white'>
            </div>
        </div>
    
        <!-- Mother’s Maiden Name -->
        <section class="w-full h-[1.5px] bg-gray-300 mt-10 mb-7"></section>
    
        <div>
            <x-forms.text_head textContent="Mother’s Maiden Name"/>
            <div class="flex space-x-3 mt-5">
                <x-forms.group-inputs label="First name" placeholder="Enter maiden first name" />
                <x-forms.group-inputs label="Middle name" placeholder="Enter maiden middle name" />
                <x-forms.group-inputs label="Surname" placeholder="Enter maiden surname" />
            </div>
    
            <div class="mt-[3rem] mr-7">
                <x-minor.button buttonContent="Next step" class='flex-row-reverse text-white'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" class="ml-2">
                        <path class="fill-current text-white"
                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" />
                    </svg>
                </x-minor.button>
            </div>
        </div>
    </div>
</div>