<x-layouts.office>
    <div>
        <div class="mt-3">
            <div class='leading-4'>
                <h1 class="text-xl text-custom-blue font-semibold">Bonus 2 details</h1>
                <p class="text-zinc-500">November 23, 2022 | <span>Wednesday</span></p>
            </div>

            <div class="flex flex-col bg-white p-3 rounded-md mt-5">
                <!--- Top filters -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="flex items-center bg-gray-200 space-x-2 px-3 py-2 rounded-md">
                            <span class='text-gray-500'>Claim status: </span>
                            <select name="" id="" class='text-custom-blue font-semibold bg-transparent outline-none'>
                                <option value="" class="font-base" selected>All members</option>
                                <option value="">Unrestricted member</option>
                                <option value="" class="font-base">Restricted member</option>
                            </select>
                        </div>
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="17" height="17">
                                    <path class="fill-current text-gray-400"
                                        d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
                                </svg>
                            </div>
                            <input type="email" name="email" id="email"
                                class="block rounded-md border-gray-300 border pl-10 focus:border-indigo-500 focus:ring-indigo-500 py-2 w-[35rem]"
                                placeholder="Search member">
                        </div>
                    </div>
            
                    <x-minor.button buttonContent="Export to Excel" class="bg-custom-green/[8%] text-custom-green">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="fill-current"
                                d="M2.859 2.877l12.57-1.795a.5.5 0 0 1 .571.495v20.846a.5.5 0 0 1-.57.495L2.858 21.123a1 1 0 0 1-.859-.99V3.867a1 1 0 0 1 .859-.99zM4 4.735v14.53l10 1.429V3.306L4 4.735zM17 19h3V5h-3V3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4v-2zm-6.8-7l2.8 4h-2.4L9 13.714 7.4 16H5l2.8-4L5 8h2.4L9 10.286 10.6 8H13l-2.8 4z" />
                        </svg>
                    </x-minor.button>
                </div>
            
                <div class="-mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-500 border">
                            <thead class="bg-custom-blue">
                                <tr>
                                    <th scope="col" class="w-[17rem] py-2.5 text-white px-3 text-left font-semibold col-span-3 border-r">Full name</th>                        
                                    <th scope="col" class="w-[10rem] py-2.5 text-white px-3 font-semibold border-r"> Amount received </th>
                                    <th scope="col" class="py-2.5 text-white px-3 font-semibold border-l text-left leading-4">Claim status</th>
            
                                    <!-- Empty here -->
                                    <th scope="col" class=" py-2.5  text-white px-3 font-semibold text-center leading-4 flex-1"></th>
                                    <th scope="col" class="w-[10rem] py-2.5 text-white px-3 font-semibold border-r text-right leading-4">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="whitespace-nowrap py-3 pl-3 text-sm font-bold border bg-gray-100">Lilly-Mai Shannon</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm font-semibold text-center border w-[7rem]">₱ 7,500.00</td>
                                    <td class="whitespace-nowrap py-3 px-3 text-sm text-left">
                                        <div class="bg-custom-green/[8%] inline px-5 font-semibold py-1 rounded-full text-custom-green">claimed</div>
                                    </td>
                                    <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center"></td>
                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                        <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-5 h-5 text-custom-blue">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="whitespace-nowrap py-3 pl-3 text-sm font-bold border bg-gray-100">Lilly-Mai Shannon</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm font-semibold text-center border w-[7rem]">₱ 7,500.00</td>
                                    <td class="whitespace-nowrap py-3 px-3 text-sm text-left flex items-center space-x-2">
                                        <div class="bg-red-500/[8%] px-5 font-semibold py-1 rounded-full text-red-500 inline">hold</div>
                                        <span class='text-zinc-500 italic text-md font-medium'>Bad Standing, Proceedings</span>
                                    </td>
                                    <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center"></td>
                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                        <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-5 h-5 text-custom-blue">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.office>