<x-layouts.admin>
    <div>
        <div class="mt-3">
            <div class="flex items-center justify-between">
                <h1 class="text-xl text-custom-blue font-bold">Release Management</h1>

                <x-minor.button buttonContent="New release" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="23" height="23">
                        <path class="fill-current text-white" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" />
                    </svg>
                </x-minor.button>
            </div>
            <div class="mt-1 flex flex-col">
                <div class="-mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-500 border">
                            <thead class="bg-custom-blue">
                                <tr>
                                    <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Date</th>
                                    <th scope="col" class="py-3.5 text-white pr-3 text-left text-sm font-semibold pl-5">Title</th>
                                    <th scope="col" class="py-3.5 text-white px-5 text-left text-sm font-semibold">Amount to release</th>
                                    <th scope="col" class="py-3.5 text-white px-5 text-sm font-semibold text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                    <td class="whitespace-nowrap py-3 px-3 text-sm font-medium">November 23, 2022</td>
                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">Bonus 3</td>
                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">₱ 30,232,435.00</td>
                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                        <a href="#" class="bg-custom-blue/[8%] rounded-md p-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-5 h-5 text-custom-blue">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                    <td class="whitespace-nowrap py-3 px-3 text-sm font-medium">August 23, 2022</td>
                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">Bonus 2</td>
                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">₱ 15,954,766.00</td>
                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5 cursor-text text-gray-400">disabled</td>
                                </tr>
                                <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                    <td class="whitespace-nowrap py-3 px-3 text-sm font-medium">July 23, 2022</td>
                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">Bonus 1</td>
                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">₱ 31,364,120.00</td>
                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5 cursor-text text-gray-400">disabled</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Add Bonus Modal -->
    {{-- <div class="fixed inset-0 bg-black/40">
        <div class="flex items-center justify-center mt-[4rem]">
            <section class="bg-white rounded-md w-[30rem] p-5">
                <div class="flex items-center justify-between">
                    <h1 class="text-custom-blue font-semibold">Create release</h1>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="fill-current text-gray-400"
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button>
                </div>

                <!-- Form -->
                <form class="mt-3">
                    <div>
                        <section class="mt-2">
                            <h1 class="font-semibold mb-1">Release title</h1>
                            <input type="text" placeholder="Enter release title" class="border bg-gray-50 rounded-md w-full p-2">
                        </section>
                        <section class="mt-2">
                            <h1 class="font-semibold mb-1">Amount</h1>
                            <input type="number" placeholder="₱ 0.00" class="border bg-gray-50 rounded-md w-full p-2">
                        </section>
                        <section class="mt-2">
                            <h1 class="font-semibold mb-1">Amount</h1>
                            <div class="relative">
                                <input name="start" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="Today - October 12, 2022">
                                <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </section>
                        <button type="submit" class="bg-custom-blue text-white w-full py-3 rounded-md mt-5 font-medium">Save</button>
                    </div>
                </form>
            </section>
        </div>
    </div> --}}
</x-layouts.admin>