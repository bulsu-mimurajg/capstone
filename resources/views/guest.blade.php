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
<body>
<header class="flex justify-between items-center px-10 py-5 border-b-[2px]">
    <div>
        <a href="/">
            <span class="font-bold text-[20px] text-[#FF9D41]">InternConnect</span>
        </a>
    </div>

    <nav class="space-x-7 text-[#666666]">
        <x-nav-link href="">About Us</x-nav-link>
        <x-nav-link href="">Contact Us</x-nav-link>
        <x-nav-link href="/login">Login</x-nav-link>
    </nav>
</header>

<main class="flex flex-col md:flex-row items-center justify-between px-20 py-10 max-w-7xl mx-auto">
    <div class="md:w-1/2 space-y-3">
        <h1 class="font-bold text-[70px] text-[#666666]">InternConnect BulSU</h1>
        <p class=" text-[#666666]">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dicta
            tempora optio magnam? Maiores distinctio ea praesentium in molestiae
            temporibus explicabo velit sed aliquid! Tempore temporibus laborum
            veniam perspiciatis debitis.
        </p>
    </div>

    <div class="md:w-1/2 flex justify-center items-center">
        <img class="w-[350px] h-[450px]" src="{{ asset('/images/pimentel.png') }}" alt="loading">
    </div>
</main>
</body>
</html>
