<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InternConnect BulSU</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="flex justify-between items-center px-10 py-5 border-b-[2px]">
        <div>
            <a href="/">
                <span class="font-bold text-[20px] text-[#FF9D41]">InternConnect</span>
            </a>
        </div>

        <div class="space-x-7 text-[#666666]">
            <x-nav-link href="/about">About Us</x-nav-link>
            <x-nav-link href="/contact">Contact Us</x-nav-link>
            <x-nav-link href="/login">Login</x-nav-link>
        </div>
    </nav>

    <header>
        <div class="md:w-1/2 space-y-3">
            <h1 class="font-bold text-[70px] text-[#666666]">{{ $heading }}</h1>
{{--            <p class=" text-[#666666]">--}}
{{--                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dicta--}}
{{--                tempora optio magnam? Maiores distinctio ea praesentium in molestiae--}}
{{--                temporibus explicabo velit sed aliquid! Tempore temporibus laborum--}}
{{--                veniam perspiciatis debitis.--}}
{{--            </p>--}}
        </div>
    </header>
    <main class="mx-auto grid grid-cols-1 md:grid-cols-2 gap-0 items-center min-h-screen">
        {{ $slot }}
    </main>
</div>
</body>
</html>
