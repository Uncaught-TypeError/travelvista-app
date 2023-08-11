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

        <section class="min-h-screen relative bg-gray-50">
            <div class="absolute top-0 left-0 w-full h-full">
                <video src="../videos/file_1.mp4" class="relative w-full h-full object-cover" autoplay muted loop></video>
            </div>

            <!-- Transparent Overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-30"></div>

            <div class="relative z-10 flex justify-center items-center min-h-screen">
                <div class="flex flex-col justify-center items-center text-center">
                    <span class="uppercase font-roboto font-extrabold text-4xl md:text-5xl xl:text-7xl p-4 text-white">Travel for all walks of life</span>
                    <span class="max-w-3xl text-sm leading-loose text-center sm:text-base normal-case text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatem in recusandae exercitationem. Ducimus sit eaque alias ut quas doloremque adipisci sint non dolores iusto debitis quasi cumque odio quisquam rem optio dolor omnis vero est dolorem quos, accusamus nulla.</span>
                    <a href="{{ route('bookings.index') }}" class="text-white py-3 px-5 border border-white mt-10 hover:bg-black hover:bg-opacity-40">Book Now</a>
                </div>
            </div>
        </section>

        <section class="mt-20 relative py-5">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl">Find Destination<span class="absolute text-sm text-orange-400">BETA</span></span>
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

        <section class="mt-10">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize font-rozha text-4xl sm:text-5xl">Tours</span>
                    <span class="text-base pt-2">Famous tours we provided</span>
                </div>
            </section>
            <section class="flex flex-col justify-center items-center mt-5  w-full sm:w-auto mx-0 sm:mx-24 rounded-lg">
                <div class="flex justify-center items-center flex-wrap gap-4 p-5">
                    @foreach ($tours as $tour)
                        <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl tour-item hidden">
                            <a href="{{ route('offers.view.TourDetail', $tour->id) }}">
                                <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                                    @if ($tour->image && Storage::exists($tour->image))
                                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ Storage::url($tour->image) }}">
                                    @else
                                        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                                    @endif
                                </div>
                                <div class="p-1 text-center">
                                    <span class="font-roboto text-3xl font-bold text-black">{{ $tour->tour_name }}</span>
                                </div>
                                <div class="p-1 text-center">
                                    <span class="font-roboto text-xl text-black">{{ $tour->destination }}</span>
                                </div>
                                <div class="p-1 text-center">
                                    <span class="font-roboto text-lg text-black">$ {{ $tour->price }} / per</span>
                                </div>
                                <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-100 items-center content-center mt-3 cursor-pointer">
                                    <a href="" class="text-black text-sm">Book Now</a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-row justify-center items-center m-3">
                    <div id="showMoreButtonTour" class="py-2 px-5 border border-black text-black rounded-xl hover:bg-gray-100 items-center content-center mt-3 cursor-pointer">
                        <span class="text-sm">Show More</span>
                    </div>
                </div>
            </section>
        </section>

        <section class="mt-10 relative py-5">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl">Find Destination<span class="absolute text-sm text-orange-400">BETA</span></span>
                    <span class="text-base pt-2">Find Any Destinations from <span class="underline">Packages</span></span>
                </div>
            </section>
            <form class="flex justify-center items-center mt-5" method="POST" action="{{ route('offers.search2') }}">
                @csrf
                <div class="flex w-1/3">
                    <div class="relative w-full">
                        <input type="search" id="packagedestination" name="packagedestination" class="z-20 block w-full rounded-lg border border-gray-300  bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-gray-500 focus:ring-gray-500" placeholder="Search Destination..." required />

                        <button type="submit" class="absolute right-0 top-0 h-full rounded-r-lg border border-gray-700 bg-gray-700 p-2.5 text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300">
                            <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            @if ($packagefilter)
            <section class="body-font text-gray-600">
                <div class="container mx-auto px-5 py-20">
                    <div class="-m-2 flex flex-wrap justify-center">
                        {{-- Display the search results --}}
                            @foreach ($packagefilter as $pf)
                            <a class="w-full p-2 md:w-1/2 lg:w-1/3" href="{{ route('offers.view.PackageDetail', $pf->id) }}">
                                <div class="flex h-full items-center rounded-lg border border-gray-200 p-4 transform transition-transform hover:scale-110 hover:bg-gray-100">
                                    @if ($pf->image && Storage::exists($pf->image))
                                        <img alt="content" class="mr-4 h-16 w-16 flex-shrink-0 rounded-full bg-gray-100 object-cover object-center" src="{{ Storage::url($pf->image) }}">
                                    @else
                                        <img alt="content" class="mr-4 h-16 w-16 flex-shrink-0 rounded-full bg-gray-100 object-cover object-center" src="https://dummyimage.com/80x80">
                                    @endif
                                    <div class="flex-grow">
                                        <h2 class="title-font font-medium text-gray-900">{{ $pf->destination }}</h2>
                                        <p class="text-gray-500">{{ $pf->package_name }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </section>
            @endif
        </section>

        <section class="mt-20 mb-10">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize font-rozha text-4xl sm:text-5xl">Packages</span>
                    <span class="text-base pt-2">Famous packages we provided</span>
                </div>
            </section>
            <section class="flex flex-col justify-center items-center mt-5  w-full sm:w-auto mx-0 sm:mx-24 rounded-lg">
                <div class="flex justify-center items-center flex-wrap gap-4 p-5">
                    @foreach ($packages as $package)
                        <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl package-item hidden">
                            <a href="{{ route('offers.view.PackageDetail', $package->id) }}">
                                <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                                    @if ($package->image && Storage::exists($package->image))
                                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ Storage::url($package->image) }}">
                                    @else
                                        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                                    @endif
                                </div>
                                <div class="p-1 text-center">
                                    <span class="font-roboto text-3xl font-bold text-black">{{ $package->package_name }}</span>
                                </div>
                                <div class="p-1 text-center">
                                    <span class="font-roboto text-xl text-black">{{ $package->destination }}</span>
                                </div>
                                <div class="p-1 text-center">
                                    <span class="font-roboto text-lg text-black">$ {{ $package->price }} / per</span>
                                </div>
                                <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-100 items-center content-center mt-3 cursor-pointer">
                                    <a href="" class="text-black text-sm">Book Now</a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-row justify-center items-center m-3">
                    <div id="showMoreButtonPackage" class="py-2 px-5 border border-black text-black rounded-xl hover:bg-gray-100 items-center content-center mt-3 cursor-pointer">
                        <span class="text-sm">Show More</span>
                    </div>
                </div>
            </section>
        </section>
        @include('reuse_codes._footer')
    </body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const showMoreButton = document.getElementById('showMoreButtonTour');
        const tourItems = document.querySelectorAll('.tour-item');
        const step = 3;

        let visibleItems = step;

        function toggleTourItems() {
            for (let i = 0; i < tourItems.length; i++) {
                if (i < visibleItems) {
                    tourItems[i].classList.remove('hidden');
                } else {
                    tourItems[i].classList.add('hidden');
                }
            }

            if (visibleItems >= tourItems.length) {
                showMoreButton.style.display = 'none';
            } else {
                showMoreButton.style.display = 'block';
            }
        }

        toggleTourItems(); // Initial display

        showMoreButton.addEventListener('click', () => {
            visibleItems += step;
            toggleTourItems();
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const showMoreButton = document.getElementById('showMoreButtonPackage');
        const packageItems = document.querySelectorAll('.package-item');
        const step = 3;

        let visibleItems = step;

        function togglePackageItems() {
            for (let i = 0; i < packageItems.length; i++) {
                if (i < visibleItems) {
                    packageItems[i].classList.remove('hidden');
                } else {
                    packageItems[i].classList.add('hidden');
                }
            }

            if (visibleItems >= packageItems.length) {
                showMoreButton.style.display = 'none';
            } else {
                showMoreButton.style.display = 'block';
            }
        }

        togglePackageItems(); // Initial display

        showMoreButton.addEventListener('click', () => {
            visibleItems += step;
            togglePackageItems();
        });
    });
</script>
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
