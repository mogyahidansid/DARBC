<div>
    <x-forms.text_head textContent='Civil Status Information' />

    <div class="mt-7">
        <div class="flex flex-col items-start space-y-1">
            <label for="" class="font-semibold">Civil status</label>
            <div class="relative bg-gray-200 rounded-md border px-3 flex items-center space-x-2 w-[18rem]"
                x-data="{showDropdown : false}">
        
                <!-- Custom select input -->
                <button class="bg-transparent rounded-md flex items-center cursor-pointer py-2 justify-between w-full"
                    @click="showDropdown = ! showDropdown" @click.away="showDropdown = false">
                    <span>Select civil status</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M12 14l-4-4h8z" />
                    </svg>
                </button>
        
                <!-- Dropdown content-->
                <div class="bg-white w-full rounded-md flex items-center cursor-pointer absolute right-0 top-10 z-[9999] shadow-md border"
                    x-show="showDropdown" x-cloak x-transition.scale.origin.top>
                    <ul class="w-full">
                        <x-forms.dropdown-content content='Single' />
                        <x-forms.dropdown-content content='Married' />
                        <x-forms.dropdown-content content='Divorced' />
                        <x-forms.dropdown-content content='Separated' />
                        <x-forms.dropdown-content content='Widowed' />
                    </ul>
                </div>
            </div>
        </div>

        <section class="w-full h-[1.5px] bg-gray-300 my-7 mb-5"></section>
                
        <div>
            <div class="flex items-center justify-between">
                <x-forms.text_head textContent="Children’s Information" />
                <x-minor.button buttonContent="Add child row" class="text-white bg-custom-orange py-1 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="23" height="23">
                        <path class="fill-current text-white" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" />
                    </svg>
                </x-minor.button>
            </div>

            <div class="flex space-x-3 mt-5 bg-white border rounded-md p-4 relative">
                <x-forms.group-inputs label="Name of child" placeholder="Child full name" />
                <x-forms.group-inputs label="Educational Attainment" placeholder="Enter Educational Attainment" />
                <x-forms.group-inputs label="Date of Birth" type="date" class='bg-gray-200 select-none' />
                <x-forms.blood_type class="w-[15rem]" />

                <button class="absolute top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="22">
                        <path class="fill-current text-red-500"
                            d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                    </svg>
                </button>
            </div>

            <div class="flex space-x-3 mt-2 bg-white border rounded-md p-4 relative">
                <x-forms.group-inputs label="Name of child" placeholder="Child full name" />
                <x-forms.group-inputs label="Educational Attainment" placeholder="Enter Educational Attainment" />
                <x-forms.group-inputs label="Date of Birth" type="date" class='bg-gray-200 select-none' />
                <x-forms.blood_type class="w-[15rem]" />

                <button class="absolute top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="22">
                        <path class="fill-current text-red-500"
                            d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                    </svg>
                </button>
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