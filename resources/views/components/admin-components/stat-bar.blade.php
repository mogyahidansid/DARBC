<div class="fixed inset-0 bg-black/40" x-show="showStatGraph" x-cloak>
    <div class="flex flex-col items-center justify-center">
        <section class="bg-white rounded-md w-[40rem] p-5 my-[2rem] h-full space-y-3">
            <div class="flex items-center justify-between">
                <h1 class="text-custom-blue font-semibold uppercase">Bar graph</h1>
                <button @click='showStatGraph = false'>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path class="fill-current text-gray-400"
                            d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                    </svg>
                </button>
            </div>


            <!--- Content -->
            <div class="h-20 w-full"></div>
        </section>
    </div>
</div>