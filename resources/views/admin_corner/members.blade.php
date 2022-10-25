<x-layouts.admin>
    <div>
        <div class="mt-3">
            <div class="">
                <h1 class="text-xl text-custom-blue font-medium">Members list</h1>
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
                                    placeholder="Search member">
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
                        <x-minor.button buttonContent="Replacement" class="bg-red-600 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                                <path class="fill-current text-white"
                                    d="M14 14.252v2.09A6 6 0 0 0 6 22l-2-.001a8 8 0 0 1 10-7.748zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm6 6v-3.5l5 4.5-5 4.5V19h-3v-2h3z" />
                            </svg>
                        </x-minor.button>

                        <x-minor.button buttonContent="Add member" class="text-white">
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
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">DARBC ID</th>
                                        <th scope="col" class="py-3.5 text-white pr-3 text-left text-sm font-semibold pl-5">Name</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Ownership</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Status</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Occupation</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Member since</th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">Current balance</th>
                                        <th scope="col" class="py-3.5 text-white px-5 text-sm font-semibold text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-medium">46326219067</td>
                                        <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">Lindsay Walton</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">Original owner</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">Regular</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">Active Dolefil Employee</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">January 14, 2010</td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-bold">₱1,049,836.00</td>
                                        <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-5 h-5 text-custom-blue">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                                </svg>
                                            </a>
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
    </div>
</x-layouts.admin>