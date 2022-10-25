<!DOCTYPE html>
<html lang="en">

<head>
    <x-partials.head />
</head>

<body class="relative">
    <div class="py-5">
        <ol role="list" class="overflow-hidden w-[20rem] fixed left-0">
            <x-forms.step title="Personal information" description="Provide your personal information."/>

            <li class="relative pb-10">
                <!-- Current Step -->
                <a href="#" class="group relative flex items-start justify-between" aria-current="step">
                    <span class="ml-4 flex min-w-0 flex-col">
                        <span class=" font-semibold text-custom-blue">Address</span>
                        <span class=" text-gray-500">Add complete address.</span>
                    </span>
                    <span class="flex h-9 items-center" aria-hidden="true">
                        <span
                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-indigo-600 bg-white">
                            <span class="h-2.5 w-2.5 rounded-full bg-indigo-600"></span>
                        </span>
                    </span>
                </a>
                <div class="absolute top-4 right-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300" aria-hidden="true"></div>
            </li>
            
            <li class="relative pb-10">
                <!-- Upcoming Step -->
                <a href="#" class="group relative flex items-start justify-between">
                    <span class="ml-4 flex min-w-0 flex-col">
                        <span class=" font-medium text-gray-500">Occupation</span>
                        <span class=" text-gray-500">Identify your occupation.</span>
                    </span>
                    <span class="flex h-9 items-center" aria-hidden="true">
                        <span
                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                            <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                        </span>
                    </span>
                </a>
                <div class="absolute top-4 right-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300" aria-hidden="true"></div>
            </li>
            
            <li class="relative pb-10">
                <!-- Upcoming Step -->
                <a href="#" class="group relative flex items-start justify-between">
                    <span class="ml-4 flex min-w-0 flex-col">
                        <span class=" font-medium text-gray-500">Civil status</span>
                        <span class=" text-gray-500 w-[15rem]">Civil status, spouse's name if married, and children's names.</span>
                    </span>
                    <span class="flex h-9 items-center" aria-hidden="true">
                        <span
                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                            <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                        </span>
                    </span>
                </a>
                <div class="absolute top-4 right-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300" aria-hidden="true"></div>
            </li>
            
            <li class="relative pb-10">
                <!-- Upcoming Step -->
                <a href="#" class="group relative flex items-start justify-between">
                    <span class="ml-4 flex min-w-0 flex-col">
                        <span class=" font-medium text-gray-500">ID’s number required</span>
                        <span class=" text-gray-500">DARBC, SSS, Philhealth, TIN,
                        contact no., and cluster number.</span>
                    </span>
                    <span class="flex h-9 items-center" aria-hidden="true">
                        <span
                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                            <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                        </span>
                    </span>
                </a>
                <div class="absolute top-4 right-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300" aria-hidden="true"></div>
            </li>
            
            <li class="relative pb-10">
                <!-- Upcoming Step -->
                <a href="#" class="group relative flex items-start justify-between">
                    <span class="ml-4 flex min-w-0 flex-col">
                        <span class=" font-medium text-gray-500">Date and Signature</span>
                        <span class=" text-gray-500 w-[15rem]">Date of applying membership and signature is required.</span>
                    </span>
                    <span class="flex h-9 items-center" aria-hidden="true">
                        <span
                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                            <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                        </span>
                    </span>
                </a>
                <div class="absolute top-4 right-4 -ml-px mt-0.5 h-full w-0.5 bg-gray-300" aria-hidden="true"></div>
            </li>
            <li class="relative pb-10">
                <!-- Upcoming Step -->
                <a href="#" class="group relative flex items-start justify-between">
                    <span class="ml-4 flex min-w-0 flex-col">
                        <span class=" font-medium text-gray-500">Summary preview</span>
                        <span class=" text-gray-500 w-[15rem]">Review and submit.</span>
                    </span>
                    <span class="flex h-9 items-center" aria-hidden="true">
                        <span
                            class="relative z-10 flex h-8 w-8 items-center justify-center rounded-full border-2 border-gray-300 bg-white group-hover:border-gray-400">
                            <span class="h-2.5 w-2.5 rounded-full bg-transparent group-hover:bg-gray-300"></span>
                        </span>
                    </span>
                </a>
            </li>
        </ol>

        <!-- Form content -->
        <div class="px-10 ml-[22rem] mr-[2rem]">
            {{-- <x-forms.step_view.personal_information /> --}}
            {{-- <x-forms.step_view.address /> --}}
            {{-- <x-forms.step_view.occupation /> --}}
            {{-- <x-forms.step_view.civil_status /> --}}
            <x-forms.step_view.identifications />
        </div>
    </div>

    @stack('address-script')
</body>

</html>