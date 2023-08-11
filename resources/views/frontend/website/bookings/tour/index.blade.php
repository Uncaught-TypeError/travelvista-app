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

        <section class="mt-28 py-5">
            <div class="flex flex-col justify-center items-center text-center">
                <span class="text-5xl font-rozha p-2">Welcome to the Tour Page!</span>
                <span class="font-roboto p-2">Do you wish to -</span>
            </div>
            <div class="flex flex-row justify-evenly items-center py-4">
                <a href="#searchToursDestination" class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                    </svg>
                    <div class="p-2 border border-black rounded-xl flex justify-center items-center hover:bg-gray-600 hover:text-white">
                        Search Tours
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </a>
                <a href="#browseTours" class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                    </svg>
                    <div class="p-2 border border-black rounded-xl flex justify-center items-center hover:bg-gray-600 hover:text-white">
                        Browse Tours
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                        </svg>                          
                    </div>
                </a>
                <a href="#browseGallery" class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                    </svg>
                    <div class="p-2 border border-black rounded-xl flex justify-center items-center hover:bg-gray-600 hover:text-white">
                        Visit Gallery
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                </a>
            </div>
        </section>

        <section class="mt-10 relative py-5" id="searchToursDestination">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl flex justify-center items-center py-1 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>
                        Find Destination
                        <span class="absolute text-sm text-orange-400 top-0 right-0">BETA</span>
                    </span>
                    <span class="text-base pt-2">Find Any Destinations from <span class="underline">Tours</span></span>
                </div>
            </section>
            <form class="flex justify-center items-center mt-5" method="POST" action="{{ route('offers.search') }}">
                @csrf
                <div class="flex w-1/3">
                    <div class="relative w-full">
                        <input type="search" id="tourdestination" name="tourdestination" class="z-20 block w-full rounded-lg border border-gray-300  bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-gray-500 focus:ring-gray-500" placeholder="Search Destination..." required />

                        <button type="submit" class="absolute right-0 top-0 h-full rounded-r-lg border border-gray-700 bg-gray-700 p-2.5 text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            @if ($tourfilter)
            <section class="body-font text-gray-600">
                <div class="container mx-auto px-5 py-20">
                    <div class="-m-2 flex flex-wrap justify-center">
                        {{-- Display the search results --}}
                            @foreach ($tourfilter as $tf)
                            <a class="w-full p-2 md:w-1/2 lg:w-1/3" href="{{ route('offers.view.TourDetail', $tf->id) }}">
                                <div class="flex h-full items-center rounded-lg border border-gray-200 p-4 transform transition-transform hover:scale-110 hover:bg-gray-100">
                                    @if ($tf->image && Storage::exists($tf->image))
                                        <img alt="content" class="mr-4 h-16 w-16 flex-shrink-0 rounded-full bg-gray-100 object-cover object-center" src="{{ Storage::url($tf->image) }}">
                                    @else
                                        <img alt="content" class="mr-4 h-16 w-16 flex-shrink-0 rounded-full bg-gray-100 object-cover object-center" src="https://dummyimage.com/80x80">
                                    @endif
                                    <div class="flex-grow">
                                        <h2 class="title-font font-medium text-gray-900">{{ $tf->destination }}</h2>
                                        <p class="text-gray-500">{{ $tf->tour_name }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
        </section>

        <section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <span class="flex items-center justify-center text-3xl p-5 font-rozha">
                        Map
                    </span>
                    <section class="body-font relative text-gray-600">
                        <div class="container mx-auto flex flex-wrap py-5 sm:flex-nowrap">
                            <div class="relative flex h-[500px] w-full items-end justify-start overflow-hidden rounded-lg bg-gray-300 p-5">
                                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src=""></iframe>
                                <div class="relative flex flex-wrap rounded bg-white py-6 shadow-md">
                                    <div class="px-6 lg:w-1/2">
                                        <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Description</h2>
                                        <p class="mt-1 truncated">Example Text</p>
                                    </div>
                                    <div class="mt-4 px-6 lg:mt-0 lg:w-1/2">
                                        <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Example Text</h2>
                                        <a href="" class="leading-relaxed font-semibold">Example Text</a>
                                        <h2 class="title-font mt-4 text-xs font-semibold tracking-widest text-gray-900">Example Text</h2>
                                        <a href="" class="leading-relaxed text-indigo-500">Example Text</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <form class="flex flex-col justify-center items-center mt-5" method="POST" action="{{ route('offers.search') }}">
                        @csrf
                        <div class="flex w-1/3">
                            <div class="relative w-full">
                                <input type="search" id="tourdestination" name="tourdestination" class="z-20 block w-full rounded-lg border border-gray-300  bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-gray-500 focus:ring-gray-500" placeholder="Search Places..." required />
        
                                <button type="submit" class="absolute right-0 top-0 h-full rounded-r-lg border border-gray-700 bg-gray-700 p-2.5 text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                        <span class="text-sm p-2 text-gray-600 uppercase">
                            Enter Any Places
                        </span>
                    </form>
                </div>
            </div>
        </section>

        <section class="relative py-5 mt-20" id="browseTours">
            <section class="flex justify-center items-center relative">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl flex justify-center items-center py-1 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>
                        Tour Collection
                    </span>
                    <span class="text-base pt-2">Every Tours Available We Provided</span>
                </div>
                <div class="absolute right-[10%]">
                    <div class="flex items-center rounded px-4 py-3 text-sm font-medium leading-none text-gray-600">
                        <p class="pr-2">Sort:</p>
                        <form action="" method="GET" id="sortForm">
                            @csrf
                            <select id="sorting" name="sorting" class="w-full rounded-lg border border-gray-300 bg-gray-50 p-1 text-sm text-gray-900">
                                <option value="default">Default</option>
                                <option value="alphasc">Alphabet Ascending</option>
                                <option value="alphdesc">Alphabet Descending</option>
                                <option value="durasc">Duration Ascending</option>
                                <option value="duresc">Duration Descending</option>
                            </select>
                            {{-- <button type="submit">Enter</button> --}}
                        </form>
                    </div>
                </div>
            </section>
            <section class="text-gray-600 body-font overflow-hidden">
                <div class="container max-w-5xl px-5 py-10 mx-auto">
                    <div class="-my-8 divide-y-2 divide-gray-100">
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                <span class="font-semibold title-font text-gray-700">CATEGORY</span>
                                <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">Bitters hashtag waistcoat fashion axe chia unicorn</h2>
                                <p class="leading-relaxed">Glossier echo park pug, church-key sartorial biodiesel vexillologist pop-up snackwave ramps cornhole. Marfa 3 wolf moon party messenger bag selfies, poke vaporware kombucha lumbersexual pork belly polaroid hoodie portland craft beer.</p>
                                <a class="text-indigo-500 inline-flex items-center mt-4">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="relative py-5" id="browseGallery">
            <section class="flex justify-center items-center relative">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl flex justify-center items-center py-1 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>
                        Tour Collection
                    </span>
                    <span class="text-base pt-2">Every Tours Available We Provided</span>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <span class="flex items-center justify-center text-3xl font-rozha p-5 mb-3">
                        Gallery of Every Tours
                    </span>
                    <div id="gallery" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-[35rem]">
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://dummyimage.com/1000x500" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                            </div>
                            <!-- Item 2 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="https://dummyimage.com/1000x500" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                            </div>
                            <!-- Item 3 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://dummyimage.com/1000x500" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                            </div>
                            <!-- Item 4 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://dummyimage.com/1000x500" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                            </div>
                            <!-- Item 5 -->
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="https://dummyimage.com/1000x500" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                            </div>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/10  group-hover:bg-black/20  group-focus:ring-2 group-focus:ring-gray-400  group-focus:outline-none">
                                <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/10 group-hover:bg-black/20 group-focus:ring-2 group-focus:ring-gray-400 group-focus:outline-none">
                                <svg class="w-4 h-4 text-black dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                    <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
                        <button type="button" class="text-gray-700 hover:bg-gray-50 border border-gray-600 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3">All Tours</button>
                        @foreach ($tours as $tour)
                            <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">{{ $tour->destination }}</button>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <a href="{{ route('gallery.viewAllTourImage') }}" class="text-black py-3 px-5 border border-black hover:bg-gray-100 rounded-full">Check More</a>
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
