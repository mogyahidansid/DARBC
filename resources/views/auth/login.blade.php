<x-layouts.auth>
    <div class="flex justify-center mt-20">
        <div class="p-5 rounded-lg bg-white flex flex-col w-[30rem] shadow-sm">
            <div class="flex justify-center space-x-2">
                <img src="assets/darbc-logo.svg" alt="" class="w-12">
            </div>
            <div class="mt-3 text-center">
                <h1 class="text-xl font-bold text-[#220068]">Welcome to DARBC</h1>
                <p class="text-gray-700">Enter your valid account to continue sign in.</p>
            </div>
    
            <div class="mt-7">
                <section>
                    <h1 class="font-medium">DARBC ID No.</h1>
                    <div class="border rounded-md flex items-center px-2 py-1 bg-white mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
                            <path class="fill-current text-gray-500"
                                d="M2 3.993A1 1 0 0 1 2.992 3h18.016c.548 0 .992.445.992.993v16.014a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V3.993zM4 5v14h16V5H4zm2 2h6v6H6V7zm2 2v2h2V9H8zm-2 6h12v2H6v-2zm8-8h4v2h-4V7zm0 4h4v2h-4v-2z" />
                        </svg>
                        <input type="text" placeholder="Enter your DARBC ID No." class="p-2 flex-1 focus:outline-none">
                    </div>
                </section>
                <section class="mt-2">
                    <h1 class="font-medium">Password</h1>
                    <div class="border rounded-md flex items-center px-2 py-1 bg-white mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22">
                            <path class="fill-current text-gray-500"
                                d="M6 8V7a6 6 0 1 1 12 0v1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2zm13 2H5v10h14V10zm-8 5.732a2 2 0 1 1 2 0V18h-2v-2.268zM8 8h8V7a4 4 0 1 0-8 0v1z" />
                        </svg>
                        <input type="password" placeholder="Password" class="p-2 flex-1 focus:outline-none">
                    </div>
                </section>
    
                <button class="bg-[#220068] text-white py-3 rounded-md w-full mt-5">Login</button>
            </div>
        </div>
    </div>

    <div class="fixed inset-0 -top-5 flex justify-center -z-10">
        <div class="w-[20rem] h-[20rem] bg-[#220068]/10 blur-3xl backdrop-blur-xl absolute top-0"></div>
    </div>
</x-layouts.auth>