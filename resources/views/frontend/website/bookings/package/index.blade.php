<x-frontend-layout>
    <x-slot name="content">

        {{-- Scroll Tags --}}
        <section class="mt-28 py-5">
            <div class="flex flex-col justify-center items-center text-center">
                <span class="text-4xl sm:text-5xl font-rozha p-2">Welcome to the Package Page!</span>
                <span class="font-roboto p-2">Do you wish to -</span>
            </div>
            <div class="flex flex-col gap-5 sm:gap-0 sm:flex-row justify-evenly items-center py-4">
                <a href="#searchPackagesDestination" class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                    </svg>
                    <div class="p-2 border border-black rounded-xl flex justify-center items-center hover:bg-gray-600 hover:text-white">
                        Search Packages
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                </a>
                <a href="#browsePackages" class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                    </svg>
                    <div class="p-2 border border-black rounded-xl flex justify-center items-center hover:bg-gray-600 hover:text-white">
                        Browse Packages
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

        {{-- Find Destination --}}
        <section class="mt-10 relative py-5" id="searchPackagesDestination">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl flex justify-center items-center py-1 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>
                        Find Destination
                        <span class="absolute text-sm text-orange-400 top-0 right-0">BETA</span>
                    </span>
                    <span class="text-base pt-2">Find Any Destinations from <span class="underline">Packages</span></span>
                </div>
            </section>
            <form class="flex justify-center items-center mt-5" method="POST" action="{{ route('packages.search') }}">
                @csrf
                <div class="flex w-1/2 sm:w-1/3">
                    <div class="relative w-full">
                        <input type="search" id="packagedestination" name="packagedestination" class="z-20 block w-full rounded-lg border border-gray-300  bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-gray-500 focus:ring-gray-500" placeholder="Search Destination..." required autocomplete="off" />

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

        {{-- Map --}}
        <section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <span class="flex items-center justify-center text-3xl p-5 font-rozha">
                        Map
                    </span>
                    <section class="body-font relative text-gray-600">
                        <div class="container mx-auto flex flex-wrap py-5 sm:flex-nowrap">
                            <div class="relative flex h-[500px] w-full items-end justify-start overflow-hidden rounded-lg bg-gray-300 p-5">
                                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={{ urlencode($mapDestination) }}&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
                                @php
                                    $count = 2;
                                @endphp
                                @if ($packageInfomation)
                                    @if ($packageInfomation->count() >= 2)
                                    <div class="relative flex flex-wrap rounded bg-white py-6 shadow-md">
                                        <div class="px-6 lg:w-1/2">
                                            <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Avaliability</h2>
                                            <p class="mt-1 truncated">There are {{ $packageInfomation->count() }} packages.</p>
                                        </div>
                                        <div class="mt-4 px-6 lg:mt-0 lg:w-1/2 flex flex-col">
                                            <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Package Names</h2>
                                            <div class="flex flex-wrap">
                                                @foreach ($packageInfomation as $tf)
                                                    <a href="{{ route('offers.view.PackageDetail', $tf->id) }}" class="leading-relaxed font-semibold">{{ $tf->package_name }}</a>
                                                @endforeach
                                            </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="relative flex flex-wrap rounded bg-white py-6 shadow-md">
                                            <div class="px-6 lg:w-1/2">
                                                <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Avaliability</h2>
                                                <p class="mt-1 truncated">There is {{ $packageInfomation->count() }} packages.</p>
                                            </div>
                                            <div class="mt-4 px-6 lg:mt-0 lg:w-1/2">
                                                <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Package Names</h2>
                                                <div class="flex flex-wrap">
                                                    @foreach ($packageInfomation as $pf)
                                                        <a href="{{ route('offers.view.TourDetail', $pf->id) }}" class="leading-relaxed font-semibold">{{ $pf->package_name }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </section>
                    <form class="flex flex-col justify-center items-center mt-5" method="POST" action="{{ route('pbookings.map.search') }}">
                        @csrf
                        <div class="flex w-1/2 sm:w-1/3">
                            <div class="relative w-full">
                                <input type="search" id="mapDestination" name="mapDestination" class="z-20 block w-full rounded-lg border border-gray-300  bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-gray-500 focus:ring-gray-500" placeholder="Search Places..." required autocomplete="off" />

                                <button type="submit" class="absolute right-0 top-0 h-full rounded-r-lg border border-gray-700 bg-gray-700 p-2.5 text-sm font-medium text-white hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                    <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                        <span class="text-xs sm:text-sm p-2 text-gray-600 uppercase">
                            Enter Any Places
                        </span>
                    </form>
                </div>
            </div>
        </section>

        {{-- Package Collection --}}
        <section class="relative py-5 mt-20" id="browsePackages">
            <section class="flex flex-col xl:flex-row justify-center items-center relative">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl flex justify-center items-center py-1 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>
                        Package Collection
                    </span>
                    <span class="text-base pt-2">Every Packages Available We Provided</span>
                </div>
                <div class="relative flex justify-center items-center xl:block xl:absolute xl:right-[10%]">
                    <div class="flex items-center rounded px-4 py-3 text-sm font-medium leading-none text-gray-600">
                        <p class="pr-2">Sort:</p>
                        <form action="{{ route('pbookings.packages.sort') }}" method="GET" id="sortForm">
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
                        @foreach ($packages as $package)
                            <div class="py-8 px-5 flex flex-col md:flex-row flex-wrap md:flex-nowrap hover:rounded-xl hover:bg-gray-100 transition duration-300 ease-in-out">
                                <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                    <span class="font-semibold title-font text-gray-700">{{ $package->package_name }}</span>
                                    <span class="mt-1 text-gray-500 text-sm">{{ $package->created_at->format('d F Y | H:i:s') }}</span>
                                    <div class="flex justify-left h-full items-center">
                                        <a href="{{ route('pbookings.stepOne', $package->id) }}" class="text-green-500 hover:text-green-400 uppercase text-lg font-semibold py-2 px-4 rounded-xl">Book Now</a>
                                    </div>
                                </div>
                                <div class="md:flex-grow">
                                    <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $package->destination }}</h2>
                                    <p class="leading-relaxed">{{ $package->description }}</p>
                                    <div class="flex flex-col">
                                        <span class="py-2">Duration: {{ $package->duration }} Days</span>
                                        <span class="py-2">Price: ${{ $package->price }}</span>
                                        <a href="{{ route('offers.view.PackageDetail', $package->id) }}" class="text-green-500 inline-flex items-center">More Details
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>

        {{-- Package Collection --}}
        <section class="relative py-5" id="browseGallery">
            <section class="flex justify-center items-center relative">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize relative font-rozha text-4xl sm:text-5xl flex justify-center items-center py-1 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                        </svg>
                        Package Images Collection
                    </span>
                    <span class="text-base pt-2">Every Images from Packages Available We Provided</span>
                </div>
            </section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <span class="flex items-center justify-center text-3xl font-rozha p-5 mb-3">
                        Gallery of Every Packages
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
                        <button type="button" class="text-gray-700 hover:bg-gray-50 border border-gray-600 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3">All Packages</button>
                        @foreach ($packages as $package)
                            <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">{{ $package->destination }}</button>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                        </div>
                        <div class="hidden sm:block">
                            <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <a href="{{ route('gallery.viewAllPackageImage') }}" class="text-black py-3 px-5 border border-black hover:bg-gray-100 rounded-full">Check More</a>
                </div>
            </div>
        </section>

    </x-slot>
</x-frontend-layout>
