<x-layouts.office>
    <div>
        <div class="mt-3">
            <div class="bg-white rounded-md p-3">
                <div class='flex flex-col items-start'>
                    <label for="majorAmount" class='font-semibold'>Enter amount applicable for majority members</label>
                    <div class='flex items-center space-x-3 w-full mt-1'>
                        <input type="text" id="majorAmount" placeholder="0.00" class='border rounded-md py-2.5 flex-1 px-2'>
                        <x-minor.button buttonContent="Save amount" class='bg-custom-blue text-white px-10' />
                    </div>
                </div>

                <p class='mt-2 text-red-500 italic'>Note that the above amount will be applicable to all members except:</p>
                
                <div class='mt-2'>
                    <div class='flex items-center space-x-3 w-full'>
                        <div class='border bg-white flex-1 rounded-md px-2 flex items-center space-x-2'>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h- text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            <input type="text" id="majorAmount" placeholder="Search member’s ID or name" class='rounded-md py-2.5 flex-1 px-2 focus:outline-none outline-none border-none' />
                        </div>

                        <form action="#" x-data="{ files: null }">
                            <label class="border p-2.5 w-full block rounded-md cursor-pointer my-2 bg-custom-green text-white" for="excelfile">
                                <div class='flex items-center space-x-2'>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path class="fill-current"
                                            d="M2.859 2.877l12.57-1.795a.5.5 0 0 1 .571.495v20.846a.5.5 0 0 1-.57.495L2.858 21.123a1 1 0 0 1-.859-.99V3.867a1 1 0 0 1 .859-.99zM4 4.735v14.53l10 1.429V3.306L4 4.735zM17 19h3V5h-3V3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4v-2zm-6.8-7l2.8 4h-2.4L9 13.714 7.4 16H5l2.8-4L5 8h2.4L9 10.286 10.6 8H13l-2.8 4z" />
                                    </svg>
                                    <h1>Import from Excel</h1>
                                </div>
                                <input type="file" class="sr-only" id="excelfile" x-on:change="files = Object.values($event.target.files)">
                            </label>
                        </form>
                    </div>
                </div>

                <div class="flex flex-col">
                    <div class="-mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-500 border">
                                <thead class="bg-custom-blue">
                                    <tr>
                                        <th scope="col" class="py-3.5 text-white pr-3 text-left text-sm font-semibold pl-5">First name</th>
                                        <th scope="col" class="py-3.5 text-white pr-3 text-left text-sm font-semibold pl-5">Last name</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Ownership</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Amount to receive</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Restrictions</th>
                                        <th scope="col" class="py-3.5 text-white px-5 text-sm font-semibold text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                        <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">Lindsay</td>
                                        <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">Walton</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">Original owner</td>
                                        <td class="whitespace-nowrap py-3 px-3 font-bold">5,450</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">
                                            <div class="bg-red-500/[8%] inline px-5 font-semibold py-1 rounded-full text-red-500">hold</div>
                                            <br>
                                            <div class="flex items-center space-x-2 italic mt-1">
                                                <h1>Bad Standing, Proceedings</h1>
                                            </div>
                                        </td>
                                        <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-custom-blue">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                        <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">Lindsay</td>
                                        <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">Walton</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">Original owner</td>
                                        <td class="whitespace-nowrap py-3 px-3 font-bold">5,450</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">
                                            <div class="bg-custom-green/[8%] inline px-5 font-semibold py-1 rounded-full text-custom-green">ready to claim</div>
                                        </td>
                                        <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-custom-blue">
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

            <div class='flex justify-end'>
                <x-minor.button buttonContent="confirm and exit" class='bg-custom-blue text-white mt-2 self-end'/>
            </div>
        </div>
    </div>
</x-layouts.office>