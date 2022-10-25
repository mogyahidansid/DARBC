<div>
    <x-forms.text_head textContent='Occupation Information' />

    <div class="mt-7 space-y-4">
        <div class="flex space-x-3">
            <div class="flex flex-col items-start">
                <label for="" class="font-semibold">Select occupation:</label>
                <div class="mt-2 space-y-2 ml-2">
                    <div class="flex items-center cursor-pointer" x-data="{ id: $id('text-input') }">
                        <input :id="id" type="radio" value="" name="default-radio"
                            class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                        <label :for="id" class="ml-2 font-medium text-gray-900">Active Dolefil Employee</label>
                    </div>
                    <div class="flex items-center cursor-pointer" x-data="{ id: $id('text-input') }">
                        <input :id="id" type="radio" value="" name="default-radio"
                            class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                        <label :for="id" class="ml-2 font-medium text-gray-900">Special Voluntarily Retirement</label>
                    </div>
                    <div class="flex items-center cursor-pointer" x-data="{ id: $id('text-input') }">
                        <input :id="id" type="radio" value="" name="default-radio"
                            class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                        <label :for="id" class="ml-2 font-medium text-gray-900">Retired</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="ml-2">
            <div class="flex flex-col items-start space-y-1">
                <label for="" class="font-semibold">If other, please specify here</label>
                <textarea name="street" id="streetaddress" cols="30" rows="2" class="border rounded-md w-5/6 p-2"
                    placeholder="Type specific occupation"></textarea>
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