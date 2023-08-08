<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-5">
                    <a href="{{ route('admin.bookings.index') }}" class="bg-gray-400 rounded-lg py-2 px-5 hover:bg-gray-500 font-bold text-white">Back</a>
                </div>
                <section class="body-font text-gray-600">
                    <div class="container mx-auto flex flex-col px-5 py-10">
                        <span class="flex items-center justify-center text-2xl">
                            @php
                                $booking_name = null;
                                $booking_image = null;
                                $booking_user = null;
                                $booking_desc = null;
                                foreach ($tours as $tour) {
                                    if ($tour->id == $booking->id) {
                                        $booking_name = $tour->tour_name;
                                        $booking_image = $tour->image;
                                        $booking_desc = $tour->description;
                                    }
                                }

                                foreach ($users as $user) {
                                    if ($user->email == $booking->email) {
                                        $booking_user = $user->name;
                                    }
                                }
                            @endphp
                            More Information for {{ $booking_name }}
                        </span>
                        <div class="mx-auto lg:w-4/6 pt-10">
                            <div class="rounded-lg h-64 overflow-hidden">
                                @if ($booking_image && Storage::exists($booking_image))
                                    <img alt="content" class="object-cover object-center h-full w-full" src="{{ Storage::url( $booking_image) }}">
                                @else
                                    <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                                @endif
                            </div>
                                <div class="mt-10 flex flex-col sm:flex-row">
                                <div class="text-center sm:w-1/3 sm:py-3 sm:pr-8">
                                    <div class="flex flex-col items-center justify-center text-center">
                                        <h2 class="title-font mt-4 text-lg font-medium text-gray-900">{{ $booking_name }}</h2>
                                        <div class="mb-4 mt-2 h-1 w-12 rounded bg-indigo-500"></div>
                                        <div class="mb-2 flex items-center justify-between gap-2">
                                            <div>
                                                <p>Destination:</p>
                                            </div>
                                            <div>
                                                <p class="text-base">{{ $booking->destination }}</p>
                                            </div>
                                        </div>
                                        <div class="mb-2 flex items-center justify-between gap-2">
                                            <p>Duration:</p>
                                            <p class="text-base">{{ \Carbon\Carbon::parse($booking->date)->format('d M Y') }}</p>
                                        </div>
                                        <div class="mb-2 flex items-center justify-between gap-2">
                                            <p>Num Person:</p>
                                            <p class="text-base">{{ $booking->num_person }} Person</p>
                                        </div>
                                        <div class="mb-2 flex items-center justify-between gap-2">
                                            <p>Status:</p>
                                            @if ($booking->status == 'cancelled')
                                            <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Cancelled</span>
                                            @elseif ($booking->status == 'accepted')
                                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Accepted</span>
                                            @else
                                            <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Pending</span>
                                            @endif
                                        </div>
                                        <div class="mb-2 flex items-center justify-between gap-2">
                                            <p>Buyer:</p>
                                            <p class="text-base capitalize" style="word-wrap: break-word;">{{ $booking_user }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 border-t border-gray-200 pt-4 text-center sm:mt-0 sm:w-2/3 sm:border-l sm:border-t-0 sm:py-8 sm:pl-8 sm:text-left">
                                    <div class="">
                                        Description
                                        <p class="mb-4 text-lg leading-relaxed capitalize" style="word-wrap: break-word;">{{ $booking_desc }}</p>
                                    </div>
                                    <a class="inline-flex items-center text-indigo-500"
                                    >Learn More
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="ml-2 h-4 w-4" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        </div>
                </section>
            </div>
        </div>
    </x-slot>
</x-admin-layout>
