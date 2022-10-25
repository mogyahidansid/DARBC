<div>
    <x-forms.text_head textContent='Identifications' />

    <div class="mt-7">
        <div class="space-y-4">
            <x-forms.group-inputs type='number' label="DARBC I.D. Number" placeholder="Enter DARBC I.D. Number" class="w-[50rem]" />
            <x-forms.group-inputs type='number' label="SSS Number" placeholder="Enter SSS ID number" class="w-[50rem]" />
            <x-forms.group-inputs type='number' label="PhilHealth Number" placeholder="Enter PhilHealth ID number" class="w-[50rem]" />
            <x-forms.group-inputs type='number' label="TIN Number" placeholder="Enter TIN number" class="w-[50rem]" />
            <x-forms.group-inputs type='number' label="Contact Number" placeholder="Enter Contact number" class="w-[50rem]" />
            <x-forms.group-inputs type='number' label="Cluster Number" placeholder="Enter Cluster number" class="w-[50rem]" />
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