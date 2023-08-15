<x-frontend-layout>
    <x-slot name="content">

        {{-- First Division --}}
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

        {{-- Search Tour --}}
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

        {{-- Tours --}}
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
                                    <a href="{{ route('bookings.tour.createOne', $tour->id) }}" class="text-black text-sm">Book Now</a>
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

        {{-- Search Packages --}}
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

        {{-- Packages --}}
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
                                    <a href="{{ route('pbookings.stepOne', $package->id) }}" class="text-black text-sm">Book Now</a>
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

    </x-slot>
</x-frontend-layout>
