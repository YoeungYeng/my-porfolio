<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> YOEUNG YENG </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="w-[80%] m-auto">

    <section class="flex justify-between items-center p-4 mt-6 ">
        {{-- logo --}}
        <h4 class="text-2xl font-bold text-blue-500">
            Portfolio
        </h4>
        {{-- dark mode --}}
        <div>
            <button
                class="p-2 bg-gray-300 hover:bg-gray-200 transition duration-200 animate-bounce rounded-full cursor-pointer">
                <span class=""> YOEUNG YENG </span>
            </button>
        </div>
    </section>
    <main>
        {{ $slot }}
    </main>

</body>

</html>
