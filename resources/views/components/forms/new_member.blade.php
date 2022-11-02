<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DARBC Registration</title>
    <link rel="icon" type="image/png" href="{{ asset('/assets/darbc-logo.svg') }}">
    
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="relative">
    <nav class="bg-white py-2.5 px-[1.5rem] flex justify-between items-center border-b fixed top-0 w-full z-[9999]">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('/assets/darbc-logo.svg') }}" alt="" class="w-12">
            <div class="leading-4">
                <h1 class='uppercase text-custom-blue font-bold text-xl'>Dolefil Agrarian Reform Beneficiaries Cooperative member’s form (2019)</h1>
                <p>Membership registration</p>
            </div>
        </div>

        <x-minor.button href="{{ url()->previous() }}" buttonContent='Cancel Registration' class="text-white bg-red-500 flex-row-reverse" >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="23" height="23" class='ml-2'>
                <path class="fill-current text-white"
                    d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9.414l2.828-2.829 1.415 1.415L13.414 12l2.829 2.828-1.415 1.415L12 13.414l-2.828 2.829-1.415-1.415L10.586 12 7.757 9.172l1.415-1.415L12 10.586z" />
            </svg>
        </x-minor.button>
    </nav>

    <div class="px-[1.5rem] flex items-start mt-[3.5rem]">
        <ol role="list" class="overflow-hidden w-[20rem] fixed left-0 mt-10">
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
                        <span class=" font-medium text-gray-500">Summary and preview</span>
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
        <div class="px-10 ml-[22rem] mr-[2rem mt-10 w-full pb-10">
            {{-- <x-forms.step_view.personal_information /> --}}
            {{-- <x-forms.step_view.address /> --}}
            {{-- <x-forms.step_view.occupation /> --}}
            {{-- <x-forms.step_view.civil_status /> --}}
            {{-- <x-forms.step_view.identifications /> --}}
            {{-- <x-forms.step_view.summary_preview /> --}}
            <x-forms.step_view.signature />
        </div>
    </div>

    @stack('dndupload-script')
</body>

</html>