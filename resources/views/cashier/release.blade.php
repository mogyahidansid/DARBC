<x-layouts.cashier>
    <div x-data="{ authorization: false }">
        <div class="mt-5">
            <div class="flex items-center space-x-2 mb-2 relative">
                <div class="bg-white border flex items-center space-x-.5 px-2.5 py-1 rounded-md flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
                        <path class="fill-current text-gray-400"
                            d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z" />
                    </svg>
                    <input type="text" placeholder="Search DARBC member's ID number or name" class="p-2 outline-none border-none focus:outline-none w-full">
                </div>

                <div class="relative bg-custom-blue text-white rounded-md border px-3 py-[12px] flex items-center space-x-2" x-data="{showDropdown : false}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="fill-current text-white/90" d="M14 14v6l-4 2v-8L4 5V3h16v2l-6 9zM6.404 5L12 13.394 17.596 5H6.404z" />
                    </svg>

                    <!-- Custom select input -->
                    <button class="bg-transparent text-white rounded-md font-medium flex items-center cursor-pointer" @click="showDropdown = ! showDropdown" @click.away="showDropdown = false">
                        <span class="font-semibold">No restriction members</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path d="M12 14l-4-4h8z" class="fill-current text-white" />
                        </svg>
                    </button>

                    <!-- Dropdown content-->
                    <div class="bg-custom-blue w-full text-white rounded-md flex items-center justify-center cursor-pointer absolute right-0 -bottom-[5.2rem] z-[9999] shadow-md"
                        x-show="showDropdown" x-cloak x-transition.scale.origin.top
                        >
                        <ul>
                            <li class="p-2 hover:text-white/70 font-semibold">No restriction members</li>
                            <li class="p-2 hover:text-white/70">Restricted members</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="w-full space-y-2">
                <section x-data="{ expanded: false }"
                    class="bg-white border rounded-md p-2 w-full relative before:bg-custom-green before:absolute before:left-0 before:top-0 before:h-full before:w-1 before:rounded-tl-md before:rounded-bl-md">
                    <div class="grid grid-cols-5 gap-1 p-3">
                        <section class="leading-4">
                            <h1 class="font-semibold">Rebeca Miller</h1>
                            <p class="text-gray-400 text-sm">Original owner</p>
                        </section>
                        <section class="leading-4">
                            <h1 class="uppercase text-gray-400 text-xs">Identification number</h1>
                            <p class="font-semibold mt-1">485266495054679</p>
                        </section>
                        <section class="leading-4">
                            <h1 class="uppercase text-gray-400 text-xs">Amount to receive</h1>
                            <p class="font-semibold mt-1">₱ 5,400.00</p>
                        </section>
                        <section class="leading-4">
                            <h1 class="uppercase text-gray-400 text-xs">Status</h1>
                            <p
                                class="font-semibold text-custom-green relative ml-3 before:absolute before:top-1.5 before:-left-3 before:h-2 before:w-2 before:bg-custom-green before:rounded-full">
                                Ready to release</p>
                        </section>
                        <div class="inline text-white justify-self-end">
                            <button class="flex items-center space-x-2 bg-custom-green hover:bg-green-hover py-2 px-3 rounded-md">
                                <span>Release now</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                    <path fill="none" d="M0 0h24v24H0z" />
                                    <path class="fill-current text-white"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="w-full flex items-center justify-center select-none relative">
                        <h1 class="uppercase text-gray-500 flex items-center cursor-pointer relative" @click="expanded = ! expanded">
                            <span class="text-sm font-semibold">Show more details</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25"
                                :class="{ 'transform rotate-180' : expanded}">
                                <path d="M12 15l-4.243-4.243 1.415-1.414L12 12.172l2.828-2.829 1.415 1.414z"
                                    class="fill-current text-gray-500" />
                            </svg>
                        </h1>
                    </div>
                
                    <!-- Expanded content -->
                    <div class="px-2" x-show="expanded" x-collapse.duration.400ms x-cloak>
                        <div class="flex items-start">
                            <div class="w-[14rem]">
                                <h1 class="uppercase text-gray-400 text-xs">Ownership</h1>
                                <div>
                                    <section class="leading-3">
                                        <h1 class="font-semibold text-lg">Steve Neale</h1>
                                        <p class="text-gray-400">Original owner</p>
                                    </section>
                                </div>
                            </div>
                
                            <!-- Table history -->
                            <div class="flex-1">
                                <div class="-mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                        <table class="min-w-full divide-y divide-gray-500 border">
                                            <thead class="bg-custom-blue">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 text-white px-5 text-left text-sm font-semibold uppercase">Date of
                                                        release</th>
                                                    <th scope="col"
                                                        class="py-3.5 text-white px-5 text-left text-sm font-semibold uppercase">Bonus
                                                        title</th>
                                                    <th scope="col"
                                                        class="py-3.5 text-white pr-3 text-left text-sm font-semibold pl-5 uppercase">
                                                        Amount</th>
                                                    <th scope="col" class="py-3.5 text-white px-5 text-sm font-semibold text-right">
                                                        Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">October 23, 2022</td>
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">Bonus 1</td>
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">₱ 3,200.00</td>
                                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                                        <span class="inline-flex items-center rounded-full bg-custom-orange/[8%] px-2.5 py-0.5 text-sm font-semibold text-custom-orange">
                                                            ready to release
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">September 23, 2022</td>
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">Bonus 2</td>
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">₱ 3,200.00</td>
                                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                                        <span class="inline-flex items-center rounded-full bg-custom-green/[8%] px-2.5 py-0.5 text-sm font-semibold text-custom-green">
                                                            claimed
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="even:bg-white odd:bg-[#F9F9FB]">
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-bold pl-5">August 23, 2022</td>
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">Bonus 3</td>
                                                    <td class="whitespace-nowrap py-4 pr-3 text-sm font-medium pl-5">₱ 3,200.00</td>
                                                    <td class="whitespace-nowrap py-3 flex space-x-2 items-center justify-end px-5">
                                                        <span class="inline-flex items-center rounded-full bg-red-500/[8%] px-2.5 py-0.5 text-sm font-semibold text-red-500">
                                                            hold
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mb-2">
                            <button class="flex items-center space-x-2 bg-custom-orange hover:bg-custom-orange py-2 px-5 rounded-md text-white mt-2" @click="authorization = true">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>View authorization proof</span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!--- Success message -->
        {{-- <div class="absolute inset-0 z-[99999]">
            <div class="flex justify-center mt-5">
                <section class="bg-white border rounded-md p-2.5 flex items-center space-x-2.5 shadow-md w-[22rem]">
                    <div class="bg-custom-green/[10%] p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="fill-current text-custom-green"
                                d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                        </svg>
                    </div>
                    <span>Proof of release captured successfully.</span>
                </section>
            </div>
        </div> --}}
        
        <!--- Released success dialog -->
        {{-- <div class="fixed inset-0 bg-black/50">
            <div class="flex justify-center mt-10">
                <div class="bg-white rounded-md w-[30rem] p-5  flex flex-col justify-center items-center text-center">
                    <section class="bg-custom-green/[10%] p-3 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25" height="25">
                            <path class="fill-current text-custom-green" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" />
                        </svg>
                    </section>

                    <section class="mt-3">
                        <h1 class="text-custom-blue font-semibold">Released successfully</h1>
                        <p class="text-gray-500">Do another transaction by clicking the next release button.</p>
                    </section>

                    <button class="bg-custom-blue text-white py-2.5 rounded-md w-full mt-5">Next release</button>
                </div>
            </div>
        </div> --}}

        <!--- Authorization proof Modal -->
        <div class="fixed inset-0 bg-black/50 flex justify-center" x-show="authorization" x-cloak>
            <section class="bg-white rounded-md w-[45rem] p-5 my-[2rem]">
                <div class="flex items-center justify-between">
                    <h1 class="text-custom-blue font-semibold">Authorization proof</h1>
                    <button @click="authorization = false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="fill-current text-gray-400"
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button>
                </div>

                <!-- Authorization letter-->
                <div class="my-2 h-[95%] w-full">
                    <img src="https://www.wordtemplatesonline.net/wp-content/uploads/2022/03/Authorization-Letter-03-22-14-1.png.webp" alt="" class="object-cover w-full h-full">
                </div>
            </section>
        </div>

    <!--- Receiving proof camera Modal -->
    {{-- <div class="fixed inset-0 bg-black/40">
        <div class="flex flex-col items-center justify-center">
            <section class="bg-white rounded-md w-[40rem] p-5 my-[2rem] h-full space-y-3">
                <div class="flex items-center justify-between">
                    <h1 class="text-custom-blue font-semibold uppercase">Proof of Release snapshot</h1>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="fill-current text-gray-400"
                                d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                        </svg>
                    </button>
                </div>
                
                <!--- Camera -->
                <div class="h-[25rem] w-[100%] bg-custom-blue/[10%] flex items-center justify-center rounded-md relative">
                    <div id="attach_camera" class="w-[100%] h-full absolute inset-0"></div>
                    <input type="hidden" name="image" class="image-tag">
                    <div id="results">The captured snapshot will be shown here.</div>
                </div>

                <!--- Buttons -->
                <div class="flex items-center space-x-3 justify-center">
                    <button id="btnTakeSnap" type="button" class="flex items-center font-medium space-x-2 bg-custom-blue py-2 px-3 rounded-md text-white mt-2" onClick="takeSnapshot()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                        <span>Take Snapshot</span>
                    </button>

                    <button id="btnSaveSnap" type="button"
                        class="flex items-center space-x-2 bg-custom-green py-2 px-3 rounded-md text-white mt-2" onClick="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path class="fill-current text-white"
                                d="M7 19v-6h10v6h2V7.828L16.172 5H5v14h2zM4 3h13l4 4v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm5 12v4h6v-4H9z" />
                        </svg>
                        <span>Save snapshot</span>
                    </button>

                    <button id="retakeSnap" class="flex items-center space-x-2 bg-[#757575] py-2 px-3 rounded-md text-white mt-2" onClick="resetCamera()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <span>Retake snapshot</span>
                    </button>
                </div>
            </section>
        </div>
    </div>
    @push('webcamjs-head')
        <script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
        </script>
    @endpush

    @push('webcamjs-script')
    <script>
        const webcam = document.getElementById('attach_camera');
        const snapshotResult = document.getElementById('results');
        const imgTag = document.querySelector('.image-tag');

        const takeSnapBtn = document.getElementById('btnTakeSnap');
        const saveSnapBtn = document.getElementById('btnSaveSnap');
        const retakeSnapBtn = document.getElementById('retakeSnap');

        takeSnapBtn.style.display = 'none';
        saveSnapBtn.style.display = 'none';
        retakeSnapBtn.style.display = 'none';
        
        Webcam.set(
            {
                image_format: 'jpeg',
                jpeg_quality: 90
            }
        );
        
        Webcam.attach(webcam);
        
        // Check if webcam is loaded or not
        navigator.getMedia = ( navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia);
        
        navigator.getMedia({video: true}, function() {
                takeSnapBtn.style.display = 'flex';
            }, function() {
                alert('Something went wrong... \nWebcam is not loaded successfully!');
                takeSnapBtn.style.display = 'none';
            }
        );

        function takeSnapshot() {
            Webcam.snap((data_uri) => {
                const imgTag = document.querySelector('.image-tag').value = data_uri;
                snapshotResult.innerHTML = '<img loading="lazy" src="'+ data_uri +'" />';

                webcam.style.display = 'none';
                takeSnapBtn.style.display = 'none';
                saveSnapBtn.style.display = 'flex';
                retakeSnapBtn.style.display = 'flex';
                }
            );
        }

        function resetCamera() {
            webcam.style.display = 'block';
            snapshotResult.innerHTML = '';
            takeSnapBtn.style.display = 'flex';
            saveSnapBtn.style.display = 'none';
            retakeSnapBtn.style.display = 'none';
        }
    </script>
    @endpush --}}
    </div>
</x-layouts.cashier>