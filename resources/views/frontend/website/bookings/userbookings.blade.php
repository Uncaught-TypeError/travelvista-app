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

        <section class="text-gray-600 body-font mt-28">
            <div class="text-center flex justify-center items-center py-16">
                <span class="text-3xl font-bold">{{ Auth::user()->name }}'s Booking History</span>
            </div>
            <div class="flex justify-around items-center">
                <div>
                    <p class="text-xl font-bold text-gray-700">{{ $tourBeenCount }}</p>
                    <p class="text-gray-400">Tours Been</p>
                </div>
                <div>
                    <p class="text-xl font-bold text-gray-700">{{ $packagesBeenCount }}</p>
                    <p class="text-gray-400">Packages Bought</p>
                </div>
                <div>
                    <p class="text-xl font-bold text-gray-700">{{ $totalReviews }}</p>
                    <p class="text-gray-400">Reviews</p>
                </div>
            </div>
            <div class="container px-5 py-16 mx-auto">
                <div class="flex flex-wrap -my-8 mx-5">
                    {{-- @if ($userbookings) --}}
                        @foreach ($userbookings as $userbooking)
                        <div class="py-8 px-4 lg:w-1/3">
                            <div class="h-full flex items-start">
                                <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                    <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">{{ $userbooking->created_at->format('F') }}
                                    </span>
                                    <span class="font-medium text-lg text-gray-800 title-font leading-none">{{ $userbooking->created_at->format('d') }}
                                    </span>
                                </div>
                                <div class="flex-grow pl-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">{{ $userbooking->destination }} (Tour)</h2>
                                    <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $userbooking->tour_name }}</h1>
                                    <a class="inline-flex items-center">
                                    {{-- <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center"> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                    <span class="flex-grow flex flex-col pl-3">
                                        <span class="title-font font-medium text-gray-900">{{ $userbooking->num_person }} Person</span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    {{-- @endif --}}
                </div>
            </div>
            <div class="container px-5 py-16 mx-auto">
                <div class="flex flex-wrap -my-8 mx-5">
                    {{-- @if ($userbookings) --}}
                        @foreach ($userpbookings as $userpb)
                        <div class="py-8 px-4 lg:w-1/3">
                            <div class="h-full flex items-start">
                                <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                    <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">{{ $userpb->created_at->format('F') }}
                                    </span>
                                    <span class="font-medium text-lg text-gray-800 title-font leading-none">{{ $userpb->created_at->format('d') }}
                                    </span>
                                </div>
                                <div class="flex-grow pl-6">
                                    <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">{{ $userpb->destination }} (Package)</h2>
                                    <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $userpb->package_name }}</h1>
                                    <a class="inline-flex items-center">
                                    {{-- <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center"> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                    <span class="flex-grow flex flex-col pl-3">
                                        <span class="title-font font-medium text-gray-900">{{ $userpb->num_person }} Person</span>
                                    </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    {{-- @endif --}}
                </div>
            </div>
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
<script src="{{ mix('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
