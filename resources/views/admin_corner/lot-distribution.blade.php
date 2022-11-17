<x-layouts.admin>
    <div>
        <div class="mt-5">
            <div class="">
                <h1 class="text-xl text-custom-blue font-bold uppercase">Lot distribution</h1>
                <div class="flex items-center justify-between">
                    <section class="flex items-center space-x-2">
                        <div>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="17" height="17">
                                        <path class="fill-current text-gray-400"
                                            d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
                                    </svg>
                                </div>
                                <input type="email" name="email" id="email"
                                    class="block rounded-md border-gray-300 border pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm py-2.5 w-[35rem]"
                                    placeholder="Search name">
                            </div>
                        </div>
                    </section>
                    <section class="flex items-center space-x-2">
                        
                        <x-minor.button buttonContent="Export to Excel" class="bg-custom-green/[8%] text-custom-green">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path class="fill-current"
                                    d="M2.859 2.877l12.57-1.795a.5.5 0 0 1 .571.495v20.846a.5.5 0 0 1-.57.495L2.858 21.123a1 1 0 0 1-.859-.99V3.867a1 1 0 0 1 .859-.99zM4 4.735v14.53l10 1.429V3.306L4 4.735zM17 19h3V5h-3V3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-4v-2zm-6.8-7l2.8 4h-2.4L9 13.714 7.4 16H5l2.8-4L5 8h2.4L9 10.286 10.6 8H13l-2.8 4z" />
                            </svg>
                        </x-minor.button>

                        <x-minor.button href="{{ route('new_member') }}" buttonContent="Add cluster"
                            class="text-white bg-custom-blue" @click="addMemberModal = true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="23" height="23">
                                <path class="fill-current text-white" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" />
                            </svg>
                        </x-minor.button>
                    </section>
                </div>
                <div class="mt-1 flex flex-col">
                    <div class="-mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-500 border">
                                <thead class="bg-custom-blue">
                                    <tr>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold uppercase w-[20rem]">Name</th>
                                        <th scope="col" class="py-3.5 text-white pr-3 text-left text-sm font-semibold uppercase w-[5rem]">Blk</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold uppercase w-[5rem]">Lot</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold uppercase w-[5rem] pr-20">Area</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold uppercase w-[20rem]">Buyer</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold uppercase">Status</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold uppercase">Date Sold</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold uppercase">Draw Date</th>
                                        <th scope="col" class="py-3.5 text-white px-5 text-sm font-semibold text-right uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                        <td class="whitespace-nowrap py-3 px-3 text-base font-semibold uppercase">Ababon, Danilo C.</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base font-medium">3</td>
                                        <td class="whitespace-nowrap py-4 pr-3 text-base font-medium pl-5">7</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base">Village 1</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base font-semibold uppercase">DAYOT, DANA S.</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">
                                            <span class="font-bold text-custom-green bg-custom-green/[8%] px-3 py-1.5 rounded-full">sold</span>
                                        </td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base">Aug. 11, 2022</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base text-gray-400">------------</td>
                                        <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 7h8v2H8V7zm0 4h8v2H8v-2zm0 4h5v2H8v-2z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm-2 2H9v2H7V5H4v4h16V5h-3v2h-2V5zm5 6H4v8h16v-8zM6 14h2v2H6v-2zm4 0h8v2h-8v-2z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M5 19h1.414l9.314-9.314-1.414-1.414L5 17.586V19zm16 2H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L9.243 19H21v2zM15.728 6.858l1.414 1.414 1.414-1.414-1.414-1.414-1.414 1.414z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                        <td class="whitespace-nowrap py-3 px-3 text-base font-semibold uppercase">AARON, NERY E.</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base font-medium">4</td>
                                        <td class="whitespace-nowrap py-4 pr-3 text-base font-medium pl-5">6</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base">Village 11</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base font-semibold uppercase text-gray-400">-------------</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm text-gray-400">-------------</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base text-gray-400">-------------</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-base">Oct. 19, 2021</td>
                                        <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 7h8v2H8V7zm0 4h8v2H8v-2zm0 4h5v2H8v-2z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm-2 2H9v2H7V5H4v4h16V5h-3v2h-2V5zm5 6H4v8h16v-8zM6 14h2v2H6v-2zm4 0h8v2h-8v-2z" />
                                                </svg>
                                            </a>
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M5 19h1.414l9.314-9.314-1.414-1.414L5 17.586V19zm16 2H3v-4.243L16.435 3.322a1 1 0 0 1 1.414 0l2.829 2.829a1 1 0 0 1 0 1.414L9.243 19H21v2zM15.728 6.858l1.414 1.414 1.414-1.414-1.414-1.414-1.414 1.414z" />
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
    </div>
</x-layouts.admin>