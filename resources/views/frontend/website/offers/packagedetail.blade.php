<x-frontend-layout>
    <x-slot name="content">

        {{-- First Divison --}}
        <section class="mt-28">
            <div class="p-5 flex justify-around">
                <a href="{{ route('pbookings.package.index') }}" class="flex text-sm sm:text-base uppercase font-roboto text-gray-700 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                    Want to choose desire package?
                </a>
                <a href="{{ route('bookings.tour.index') }}" class="flex text-sm sm:text-base uppercase font-roboto text-gray-700 hover:text-black">
                    Switch to tour?
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
            <section class="body-font text-gray-600 flex justify-center items-center">
                <div class="container mx-auto flex flex-col px-5 py-10">
                    <span class="flex items-center justify-center text-4xl font-rozha">
                        More Information for {{ $package->package_name }}
                    </span>
                    <div class="mx-auto lg:w-4/6 pt-10">
                        <div class="rounded-lg h-96 overflow-hidden">
                        @if ($package->image && Storage::exists($package->image))
                            <a href="{{ route('gallery.package.index', $package->id) }}">
                                <img alt="content" class="object-cover object-center h-full w-full" src="{{ Storage::url($package->image) }}">
                            </a>
                        @else
                            <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                        @endif
                        </div>
                        <div class="flex justify-evenly items-center p-5">
                            <a href="{{ route('gallery.package.index', $package->id) }}" class="border p-2 sm:p-3 border-black hover:bg-gray-100 rounded-lg cursor-pointer text-sm sm:text-base">View {{ $package->package_name }} Images</a>
                            <a href="{{ route('gallery.viewAllPackageImage') }}" class="border p-2 sm:p-3 border-black text-sm sm:text-base hover:bg-gray-100 rounded-lg cursor-pointer">View Package Gallery</a>
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
                                <a href="{{ route('pbookings.stepOne', $package->id) }}" class="inline-flex text-xl items-center text-blue-500 cursor-pointer"
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

        {{-- Map --}}
        <section>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                    <span class="flex items-center justify-center text-3xl p-5 font-rozha">
                        Destination {{ $package->destination }}
                    </span>
                    <section class="body-font relative text-gray-600">
                        <div class="container mx-auto flex flex-wrap py-5 sm:flex-nowrap">
                            <div class="relative flex h-[500px] w-full items-end justify-start overflow-hidden rounded-lg bg-gray-300 p-5">
                                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={{ urlencode($package->destination) }}&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                                <div class="relative flex flex-wrap rounded bg-white py-6 shadow-md">
                                    <div class="px-6 lg:w-1/2">
                                        <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Description</h2>
                                        <p class="mt-1 truncated">{{ $package->description }}</p>
                                    </div>
                                    <div class="mt-4 px-6 lg:mt-0 lg:w-1/2">
                                        <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Package Name</h2>
                                        <a href="{{ route('admin.packages.show', $package->id) }}" class="leading-relaxed font-semibold">{{ $package->package_name }}</a>
                                        <h2 class="title-font mt-4 text-xs font-semibold tracking-widest text-gray-900">Like it?</h2>
                                        <a href="{{ route('pbookings.stepOne', $package->id) }}" class="leading-relaxed text-indigo-500">Book Now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

    </x-slot>
</x-frontend-layout>

