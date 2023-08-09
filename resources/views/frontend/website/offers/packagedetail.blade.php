<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&family=Rozha+One&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="scroll-smooth relative antialiased">
        @include('reuse_codes._navigation')
        <!-- Fb and Insta -->
        <div class="opacity-0 sm:opacity-100 fixed right-7 top-1/2 z-30">
            <div class="flex flex-col gap-2">
                <img class="bg-gray-300 rounded-full p-1 w-7 h-7 cursor-pointer" src="https://img.icons8.com/ios-glyphs/30/facebook-f.png" alt="facebook-f"/>
                <img class="bg-gray-300 rounded-full p-1 w-7 h-7 cursor-pointer" src="https://img.icons8.com/ios/50/instagram-new--v1.png" alt="instagram-new--v1"/>
            </div>
        </div>
        <!-- Lets Chat -->
        <div class="opacity-0 sm:opacity-100 fixed right-2 bottom-0 z-30">
            <div class="flex flex-row justify-center items-center gap-2 bg-cyan-600 px-4 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
                <span class="font-roboto text-white">Let's Chat!</span>
            </div>
        </div>

    <section class="mt-28">
        <div class="p-5 flex justify-around">
            <a href="" class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
                <span class="uppercase font-roboto text-gray-700">Want to choose desire package?</span>
            </a>
            <a href="{{ url()->previous() }}">
                <span class="uppercase font-roboto text-gray-700">Back</span>
            </a>
            <a href="" class="flex">
                <span class="uppercase font-roboto text-gray-700">Switch to tour?</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
        <section class="body-font text-gray-600 flex justify-center items-center">
            <div class="container mx-auto flex flex-col px-5 py-10">
                <span class="flex items-center justify-center text-4xl">
                    More Information for {{ $package->package_name }}
                </span>
                <div class="mx-auto lg:w-4/6 pt-10">
                    <div class="rounded-lg h-96 overflow-hidden">
                    @if ($package->image && Storage::exists($package->image))
                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ Storage::url($package->image) }}">
                    @else
                        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                    @endif
                    </div>
                    <div class="flex justify-evenly items-center p-5">
                        <span class="border p-3 border-black hover:bg-gray-100 rounded-lg cursor-pointer">View {{ $package->package_name }} Images</span>
                        <span class="border p-3 border-black hover:bg-gray-100 rounded-lg cursor-pointer">View Image Gallery</span>
                    </div>
                    <div class="flex flex-col sm:flex-row">
                        <div class="text-center sm:w-1/3 sm:py-3 sm:pr-8">
                            <div class="flex flex-col items-center justify-center text-center">
                                <h2 class="title-font mt-4 text-lg font-medium text-gray-900">{{ $package->package_name }}</h2>
                                <div class="mb-4 mt-2 h-1 w-12 rounded bg-gray-500"></div>
                                <div class="mb-2 flex items-center justify-between gap-2">
                                    <div>
                                        <p>Destination:</p>
                                    </div>
                                    <div>
                                        <p class="text-base">{{ $package->destination }}</p>
                                    </div>
                                </div>
                                <div class="mb-2 flex items-center justify-between gap-2">
                                    <p>Duration:</p>
                                    <p class="text-base">{{ $package->duration }} Days</p>
                                </div>
                                <div class="mb-2 flex items-center justify-between gap-2">
                                    <p>Price:</p>
                                    <p class="text-base">$ {{ $package->price }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 border-t border-gray-200 pt-4 text-center sm:mt-0 sm:w-2/3 sm:border-l sm:border-t-0 sm:py-8 sm:pl-8 sm:text-left">
                            <div class="">
                                <p class="mb-4 text-lg leading-relaxed" style="word-wrap: break-word;">{{ $package->description }}</p>
                            </div>
                            <a class="inline-flex text-xl items-center text-blue-500 cursor-pointer"
                            >Book Now
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="ml-2 h-5 w-5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

        @include('reuse_codes._footer')
    </body>
</html>

<script>
    const dropdownBtn = document.getElementById('dropdown-btn');
    const dropdownDiv = document.getElementById('dropdown-div');
    const closeBtn = document.getElementById('close-btn');

    dropdownBtn.addEventListener('click', () => {
        dropdownDiv.classList.toggle('hidden');
        closeBtn.classList.toggle('hidden');
    });

    closeBtn.addEventListener('click', () => {
        dropdownDiv.classList.toggle('hidden');
        closeBtn.classList.toggle('hidden');
    });

    // Close the dropdown when clicking outside of it
    window.addEventListener('click', (event) => {
        if (!dropdownBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
            closeBtn.classList.add('hidden');
        }
    });
</script>
<script>
    const dropdownBtn2 = document.getElementById('dropdown-btn2');
    const dropdownMenu2 = document.getElementById('dropdown-menu2');

    dropdownBtn2.addEventListener('click', () => {
        dropdownMenu2.classList.toggle('hidden');
    });
</script>
<script>
    const dropdownBtn3 = document.getElementById('dropdown-btn3');
    const dropdownMenu3 = document.getElementById('dropdown-menu3');

    dropdownBtn3.addEventListener('click', () => {
        dropdownMenu3.classList.toggle('hidden');
    });
</script>

