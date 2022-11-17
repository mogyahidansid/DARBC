<x-layouts.admin>
    <div>
        <div class="mt-3">
            <div class="space-y-5">
                <div>
                    <h1 class="text-lg text-custom-blue font-bold">LOT Information</h1>
                    
                    <div class="flex items-center space-x-5 mt-3">
                        <div>
                            <ul class="text-right space-y-2 text-gray-500 font-semibold">
                                <li>Owner's Name:</li>
                                <li>Descendent Name:</li>
                                <li>Cluster:</li>
                                <li>Lot Location:</li>
                                <li>Status:</li>
                                <li>Draw Date:</li>
                            </ul>
                        </div>
                        <div>
                            <ul class="text-left space-y-2 uppercase text-custom-blue font-semibold">
                                <li>ababon, danilo c.</li>
                                <li>DIANA LUZ S. ABABON</li>
                                <li>51</li>
                                <li>BLOCK 3, LOT 7, VILLAGE 1</li>
                                <li>
                                    <span
                                        class="font-bold text-custom-green lowercase text-sm bg-custom-green/[8%] px-3 py-1 rounded-full">sold</span>
                                </li>
                                <li>
                                    <span class="text-gray-400 lowercase">None</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h1 class="text-lg text-custom-blue font-bold">Buyer's Information</h1>
                    
                    <div class="flex items-center space-x-5 mt-3">
                        <div>
                            <ul class="text-right space-y-2 text-gray-500 font-semibold">
                                <li>Name:</li>
                                <li>Acquired Date:</li>
                            </ul>
                        </div>
                        <div>
                            <ul class="text-left space-y-2 uppercase text-custom-blue font-semibold">
                                <li>DAYOT, DANA S.</li>
                                <li>August 11, 2022</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h1 class="text-lg text-custom-blue font-bold">Uploaded Documents</h1>
                    
                    <div class="mt-3" x-data="{ documentOptions : false }">
                        <ul>
                            <li class="bg-white border rounded-md p-2 relative">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="pdf icon" class="h-8">
                                        <h1 class="text-custom-blue font-semibold">Lot Tile.pdf</h1>
                                    </div>
                                    <div class="flex items-center space-x-32">
                                        <h1>November 28, 2022</h1>
                                        <h1>5 MB</h1>
                                        <button class="rounded-full bg-custom-blue text-white p-1" @click="documentOptions = true">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20">
                                                <path class="fill-current"
                                                    d="M5 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm14 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-7 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Options -->
                                <div class="bg-white border rounded-md absolute top-8 right-0 px-3 text-gray-500 w-[10rem]" x-show="documentOptions" x-cloak @click.away="documentOptions = false">
                                    <ul class="py-2">
                                        <li class="py-1">
                                            <a href="#" class="flex items-center space-x-2 hover:text-black">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                                    <path class="fill-current"
                                                        d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15zm-3.847-8.699a2 2 0 1 0 2.646 2.646 4 4 0 1 1-2.646-2.646z" />
                                                </svg>
                                                <span>View PDF</span>
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="flex items-center space-x-2 hover:text-black">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                                    <path class="fill-current"
                                                        d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z" />
                                                </svg>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>