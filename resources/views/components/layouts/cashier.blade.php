<!DOCTYPE html>
<html lang="en">

<head>
    <x-partials.head />
</head>

<body class="relative">
    <x-cashier.sidebar />
    <main class="flex-1 px-[1.5rem] pt-[1.3rem] ml-[18rem]">
        <!--- Topbar -->
        <x-topbar />

        <!--- Main content -->
        {{ $slot }}
    </main>

    @stack('webcamjs-script')
</body>

</html>