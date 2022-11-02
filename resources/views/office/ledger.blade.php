<x-layouts.office>
    <div>
        <div class="mt-3">
            <div class="">
                <div>
                    <h1 class="text-xl text-custom-blue font-semibold">Membership claim bonus</h1>
                    <div class="flex items-center space-x-5">
                        <div class="flex items-center space-x-1">
                            <div class='w-2.5 h-2.5 bg-gray-400 rounded-full'></div>
                            <span class="text-gray-400">Claimed</span>    
                        </div>
                        <div class="flex items-center space-x-1">
                            <div class='w-2.5 h-2.5 bg-red-500 rounded-full'></div>
                            <span class="text-red-500">Hold</span>    
                        </div>
                        <div class="flex items-center space-x-1">
                            <div class='w-2.5 h-2.5 bg-custom-orange rounded-full'></div>
                            <span class="text-custom-orange">Ready to claim</span>    
                        </div>
                    </div>
                </div>
                <div class="mt-1 flex flex-col bg-white p-3 rounded-md">
                    <!--- Top filters -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center bg-gray-200 space-x-2 px-3 py-2 rounded-md">
                                <span class='text-gray-500'>Year: </span>
                                <select name="" id="" class='text-custom-blue font-bold bg-transparent outline-none'>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                            <div class="flex items-center bg-gray-200 space-x-2 px-3 py-2 rounded-md">
                                <span class='text-gray-500'>Claim status: </span>
                                <select name="" id="" class='text-custom-blue font-semibold bg-transparent outline-none'>
                                    <option value="2021" class="font-base">All members</option>
                                    <option value="2022" selected>Unrestricted members</option>
                                    <option value="2021" class="font-base">Restricted members</option>
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
                                        <th scope="col" class="w-[17rem] py-2.5 text-white px-3 text-left font-semibold col-span-3">Full name</th>
                                        
                                        <th scope="col" class="w-[8rem] py-2.5 text-white px-3 font-semibold bg-custom-green border-r">
                                            <div class='flex items-center justify-center space-x-3'>
                                                <div class="leading-4">
                                                    <h1>Bonus 1</h1>
                                                    <span class='text-sm font-normal'>July 23</span>
                                                </div>
                                                <a href="{{ route('bonus-details') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="w-[8rem] py-2.5 text-white px-3 font-semibold bg-custom-green border-r">
                                            <div class='flex items-center justify-center space-x-3'>
                                                <div class="leading-4">
                                                    <h1>Bonus 2</h1>
                                                    <span class='text-sm font-normal'>August 23</span>
                                                </div>
                                                <a href="{{ route('bonus-details') }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </th>
                                        
                                        <th scope="col" class="w-[8rem] py-2.5 text-white px-3 font-semibold bg-custom-orange border-r flex items-center justify-center space-x-2">
                                            <div class="leading-4">
                                                <h1>Bonus 3</h1>
                                                <span class='text-sm font-normal'>August 23</span>
                                            </div>
                                            <a href="{{ route('new-release') }}"><svg width="18" height="18" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.99997 2.99512C9.73475 2.99512 9.4804 3.10047 9.29286 3.28801C9.10533 3.47555 8.99997 3.7299 8.99997 3.99512V5.57712C8.31033 5.85646 7.66308 6.23074 7.07697 6.68912L5.70597 5.89712C5.47629 5.76451 5.20334 5.72858 4.94717 5.79722C4.691 5.86586 4.47258 6.03344 4.33997 6.26312L2.33997 9.72712C2.20737 9.9568 2.17143 10.2297 2.24007 10.4859C2.30871 10.7421 2.4763 10.9605 2.70597 11.0931L4.07597 11.8841C3.97341 12.6212 3.97341 13.369 4.07597 14.1061L2.70597 14.8961C2.59211 14.9618 2.49232 15.0492 2.4123 15.1535C2.33227 15.2578 2.27358 15.3768 2.23959 15.5037C2.2056 15.6307 2.19697 15.7631 2.21419 15.8934C2.23141 16.0237 2.27416 16.1493 2.33997 16.2631L4.33997 19.7271C4.47258 19.9568 4.691 20.1244 4.94717 20.193C5.20334 20.2617 5.47629 20.2257 5.70597 20.0931L7.07697 19.3011C7.65797 19.7561 8.30497 20.1311 8.99997 20.4131V21.9951C8.99997 22.2603 9.10533 22.5147 9.29286 22.7022C9.4804 22.8898 9.73475 22.9951 9.99997 22.9951H14C14.2652 22.9951 14.5195 22.8898 14.7071 22.7022C14.8946 22.5147 15 22.2603 15 21.9951V20.4131C15.6896 20.1338 16.3368 19.7595 16.923 19.3011L18.294 20.0931C18.5236 20.2257 18.7966 20.2617 19.0528 20.193C19.3089 20.1244 19.5274 19.9568 19.66 19.7271L21.66 16.2631C21.7926 16.0334 21.8285 15.7605 21.7599 15.5043C21.6912 15.2481 21.5236 15.0297 21.294 14.8971L19.924 14.1061C20.0265 13.369 20.0265 12.6212 19.924 11.8841L21.294 11.0941C21.4078 11.0285 21.5076 10.941 21.5876 10.8367C21.6677 10.7325 21.7264 10.6135 21.7603 10.4865C21.7943 10.3595 21.803 10.2271 21.7857 10.0968C21.7685 9.96651 21.7258 9.84089 21.66 9.72712L19.66 6.26312C19.5274 6.03344 19.3089 5.86586 19.0528 5.79722C18.7966 5.72858 18.5236 5.76451 18.294 5.89712L16.923 6.68912C16.3369 6.23075 15.6896 5.85647 15 5.57712V3.99512C15 3.7299 14.8946 3.47555 14.7071 3.28801C14.5195 3.10047 14.2652 2.99512 14 2.99512H9.99997ZM11 6.28512V4.99512H13V6.28512C13.0001 6.50051 13.0697 6.7101 13.1986 6.88271C13.3274 7.05533 13.5085 7.18173 13.715 7.24312C14.6153 7.512 15.4399 7.98883 16.122 8.63512C16.2784 8.78338 16.4786 8.87711 16.6927 8.90234C16.9068 8.92757 17.1233 8.88294 17.31 8.77512L18.428 8.12912L19.428 9.86112L18.311 10.5061C18.1246 10.6137 17.9779 10.7786 17.8927 10.9762C17.8074 11.1739 17.7883 11.3937 17.838 11.6031C18.0555 12.5184 18.0555 13.4719 17.838 14.3871C17.7883 14.5965 17.8074 14.8164 17.8927 15.014C17.9779 15.2116 18.1246 15.3765 18.311 15.4841L19.428 16.1291L18.428 17.8611L17.309 17.2151C17.1224 17.1075 16.9061 17.063 16.6923 17.0883C16.4784 17.1135 16.2784 17.2071 16.122 17.3551C15.4399 18.0015 14.6154 18.4783 13.715 18.7471C13.5085 18.8085 13.3274 18.9349 13.1986 19.1075C13.0697 19.2801 13.0001 19.4897 13 19.7051V20.9951H11V19.7051C10.9999 19.4897 10.9302 19.2801 10.8014 19.1075C10.6725 18.9349 10.4914 18.8085 10.285 18.7471C9.38459 18.4783 8.56006 18.0014 7.87797 17.3551C7.72149 17.2069 7.52129 17.1131 7.30721 17.0879C7.09313 17.0627 6.87663 17.1073 6.68997 17.2151L5.57197 17.8611L4.57197 16.1291L5.68897 15.4841C5.87536 15.3765 6.02207 15.2116 6.10728 15.014C6.1925 14.8164 6.21168 14.5965 6.16197 14.3871C5.94444 13.4719 5.94444 12.5184 6.16197 11.6031C6.21168 11.3937 6.1925 11.1739 6.10728 10.9762C6.02207 10.7786 5.87536 10.6137 5.68897 10.5061L4.57197 9.86112L5.57197 8.12912L6.68997 8.77512C6.87663 8.88294 7.09313 8.92757 7.30721 8.90234C7.52129 8.87711 7.72149 8.78338 7.87797 8.63512C8.56008 7.98883 9.3846 7.512 10.285 7.24312C10.4914 7.18173 10.6725 7.05533 10.8014 6.88271C10.9302 6.7101 10.9999 6.50051 11 6.28512ZM9.99997 12.9951C9.99997 12.4647 10.2107 11.956 10.5858 11.5809C10.9608 11.2058 11.4695 10.9951 12 10.9951C12.5304 10.9951 13.0391 11.2058 13.4142 11.5809C13.7893 11.956 14 12.4647 14 12.9951C14 13.5256 13.7893 14.0343 13.4142 14.4093C13.0391 14.7844 12.5304 14.9951 12 14.9951C11.4695 14.9951 10.9608 14.7844 10.5858 14.4093C10.2107 14.0343 9.99997 13.5256 9.99997 12.9951ZM12 8.99512C10.9391 8.99512 9.92169 9.41654 9.17154 10.1667C8.4214 10.9168 7.99997 11.9343 7.99997 12.9951C7.99997 14.056 8.4214 15.0734 9.17154 15.8235C9.92169 16.5737 10.9391 16.9951 12 16.9951C13.0608 16.9951 14.0783 16.5737 14.8284 15.8235C15.5785 15.0734 16 14.056 16 12.9951C16 11.9343 15.5785 10.9168 14.8284 10.1667C14.0783 9.41654 13.0608 8.99512 12 8.99512Z"
                                                        fill="white" />
                                                </svg>
                                            </a>
                                        </th>
                                        <!-- Empty here --> 
                                        <th scope="col" class=" py-2.5  text-white px-3 font-semibold text-center leading-4 flex-1"></th>
                                        <th scope="col" class="w-[7rem] py-2.5 text-white px-3 font-semibold border text-center leading-4">Status</th>
                                        <th scope="col" class="w-[10rem] py-2.5 text-white px-3 font-semibold border-r text-center leading-4">Amount to claim</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="whitespace-nowrap py-3 pl-3 text-sm font-bold border bg-gray-100">Lilly-Mai Shannon</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm font-semibold text-center border text-red-500 w-[7rem]">7,500.00</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm font-semibold text-center border text-gray-400 w-[7rem]">7,500.00</td>
                                        <td class="w-[8rem] whitespace-nowrap py-3 px-3 text-sm font-semibold text-center border text-gray-400 bg-gray-100"></td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center"></td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center border">
                                            <div class="bg-custom-green/[8%] py-1 rounded-full text-custom-green">release</div>
                                        </td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center">₱ 13,750.00</td>
                                    </tr>
                                    <tr>
                                        <td class="whitespace-nowrap py-3 pl-3 text-sm font-bold border bg-gray-100">Lilly-Mai Shannon</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm font-semibold text-center border text-gray-400 w-[7rem]">7,500.00</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm font-semibold text-center border text-gray-400 w-[7rem]">7,500.00</td>
                                        <td class="w-[8rem] whitespace-nowrap py-3 px-3 text-sm font-semibold text-center border text-gray-400 bg-gray-100"></td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center"></td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center border">
                                            <div class="bg-red-500/[8%] py-1 rounded-full text-red-500">hold</div>
                                        </td>
                                        <td class="whitespace-nowrap py-3 px-3 text-sm font-semibold text-center">₱ 13,750.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.office>