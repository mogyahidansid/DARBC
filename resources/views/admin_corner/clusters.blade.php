<x-layouts.admin>
    <div>
        <div class="mt-5">
            <div class="">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl text-custom-blue font-bold uppercase">Cluster list</h1>
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
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">
                                            Cluster No.</th>
                                        <th scope="col"
                                            class="py-3.5 text-white pr-3 text-left text-sm font-semibold pl-5">No. of Members
                                        </th>
                                        <th scope="col" class="py-3.5 text-white px-3 text-left text-sm font-semibold">
                                            Leader</th>
                                        <th scope="col" class="py-3.5 text-white px-5 text-sm font-semibold text-right">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-medium">1</td>
                                        <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">3200
                                        </td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm">Tasnia Mathews</td>
                                        <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                            <a href="#" class="bg-custom-blue/[8%] rounded-md p-1.5">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
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