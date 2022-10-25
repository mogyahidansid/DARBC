<!DOCTYPE html>
<html lang="en">
<head>
    <x-partials.head />
</head>
    <body class="relative">
        <x-admin.sidebar />
        <main class="ml-[18rem] flex-1 px-[1.5rem] pt-[1.3rem]">
            <!--- Topbar -->
            <x-topbar />

            <!--- Main content -->
            {{ $slot }}
        </main>
    </body>
</html>