<x-frontend-layout>
    <x-slot name="content">

        {{-- Booking History --}}
        <section class="text-gray-600 body-font mt-28">
            <div class="text-center flex justify-center items-center py-16">
                <span class="text-3xl font-bold">{{ Auth::user()->name }}'s Booking History</span>
            </div>
            <div class="pb-5 flex justify-center items-center">
                <a href="{{ route('complaint.index') }}" class="text-lg text-white border hover:border-red-300 hover:bg-red-300 border-red-500 bg-red-500 p-1 rounded-xl">
                    Customer Support
                </a>
            </div>
            <div class="flex justify-around items-center mt-5">
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
                                        <div class="">
                                            <a href="{{ route('reviews.tour.create', $userbooking->tour_id) }}" class=" text-blue-500 underline text-sm">Review</a>
                                        </div>
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
                                        <div class="">
                                            <a href="{{ route('reviews.package.create', $userpb->package_id) }}" class=" text-blue-500 underline text-sm">Review</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    {{-- @endif --}}
                </div>
            </div>
            <div class="flex flex-col text-center p-5">
                <span class="text-xl uppercase py-3">If you love travelling with us!</span>
                <span class="">Kindly give us reviews!</span>
            </div>
        </section>

    </x-slot>
</x-frontend-layout>
