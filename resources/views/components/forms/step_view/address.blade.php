<div>
    <x-forms.text_head textContent='Address Information'/>

    <div class="mt-7 space-y-3">
        <div class="flex space-x-3">
            <div class="flex flex-col items-start space-y-1">
                <label for="" class="font-semibold">Province</label>
                <div class="relative bg-gray-200 rounded-md border px-3 flex items-center space-x-2 w-[18rem]"
                    x-data="{showDropdown : false}">
            
                    <!-- Custom select input -->
                    <button class="bg-transparent rounded-md flex items-center cursor-pointer py-2 justify-between w-full"
                        @click="showDropdown = ! showDropdown" @click.away="showDropdown = false">
                        <span>Select province</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 14l-4-4h8z" />
                        </svg>
                    </button>
            
                    <!-- Dropdown content-->
                    <div class="bg-white w-full rounded-md flex items-center cursor-pointer absolute right-0 top-10 z-[9999] shadow-md border"
                        x-show="showDropdown" x-cloak x-transition.scale.origin.top>
                        <ul class="w-full">
                            <x-forms.dropdown-content content='from api data' />
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col items-start space-y-1">
                <label for="" class="font-semibold">City</label>
                <div class="relative bg-gray-200 rounded-md border px-3 flex items-center space-x-2 w-[18rem]"
                    x-data="{showDropdown : false}">
            
                    <!-- Custom select input -->
                    <button class="bg-transparent rounded-md flex items-center cursor-pointer py-2 justify-between w-full"
                        @click="showDropdown = ! showDropdown" @click.away="showDropdown = false">
                        <span>Select city</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 14l-4-4h8z" />
                        </svg>
                    </button>
            
                    <!-- Dropdown content-->
                    <div class="bg-white w-full rounded-md flex items-center cursor-pointer absolute right-0 top-10 z-[9999] shadow-md border"
                        x-show="showDropdown" x-cloak x-transition.scale.origin.top>
                        <ul class="w-full">
                            <x-forms.dropdown-content content='from api data' />
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col items-start space-y-1">
                <label for="" class="font-semibold">Barangay</label>
                <div class="relative bg-gray-200 rounded-md border px-3 flex items-center space-x-2 w-[18rem]"
                    x-data="{showDropdown : false}">
            
                    <!-- Custom select input -->
                    <button class="bg-transparent rounded-md flex items-center cursor-pointer py-2 justify-between w-full"
                        @click="showDropdown = ! showDropdown" @click.away="showDropdown = false">
                        <span>Select barangay</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 14l-4-4h8z" />
                        </svg>
                    </button>
            
                    <!-- Dropdown content-->
                    <div class="bg-white w-full rounded-md flex items-center cursor-pointer absolute right-0 top-10 z-[9999] shadow-md border"
                        x-show="showDropdown" x-cloak x-transition.scale.origin.top>
                        <ul class="w-full">
                            <x-forms.dropdown-content content='from api data' />
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="flex flex-col items-start space-y-1">
                <label for="" class="font-semibold">Streen name, building, house no.</label>
                <textarea name="street" id="streetaddress" cols="30" rows="3" class="border rounded-md w-5/6 p-2" placeholder="Enter additional address"></textarea>
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