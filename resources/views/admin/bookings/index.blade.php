<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="body-font overflow-hidden text-gray-600">
                    <div class="items-center justify-between sm:flex p-5">
                        <div class="flex items-center">
                            <a class="rounded-full focus:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-800" href="javascript:void(0)" id="all-bookings-button">
                                <div class="rounded-full px-8 py-2 text-blue-700">
                                    <p>All</p>
                                </div>
                            </a>
                            <a id="accepted-bookings-button" class="ml-4 rounded-full focus:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-800 sm:ml-8" href="javascript:void(0)">
                                <div class="rounded-full px-8 py-2 text-gray-600 hover:bg-blue-100 hover:text-blue-700">
                                    <p>Accepted</p>
                                </div>
                            </a>
                            <a id="cancelled-bookings-button" class="ml-4 rounded-full focus:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-800 sm:ml-8" href="javascript:void(0)">
                                <div class="rounded-full px-8 py-2 text-gray-600 hover:bg-blue-100 hover:text-blue-700">
                                    <p>Cancelled</p>
                                </div>
                            </a>
                            <a id="pending-bookings-button" class="ml-4 rounded-full focus:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-800 sm:ml-8" href="javascript:void(0)">
                                <div class="rounded-full px-8 py-2 text-gray-600 hover:bg-blue-100 hover:text-blue-700">
                                    <p>Pending</p>
                                </div>
                            </a>
                        </div>
                        <a onclick="popuphandler(true)" href="{{ route('admin.bookings.createOne') }}" class="mt-4 inline-flex items-start justify-start rounded bg-blue-500 px-6 py-3 hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 sm:mt-0">
                            <p class="text-sm font-medium leading-none text-white">Add Bookings</p>
                        </a>
                    </div>
                    <div class="container mx-auto px-5 py-10">
                            @foreach ($bookings as $booking)
                        <div class="-my-8 divide-y-2 divide-gray-100 p-5">
                            <div class="flex flex-wrap gap-3 border-2 border-gray-200 p-3 py-8 md:flex-nowrap md:gap-10">
                            <div class="mb-6 flex flex-shrink-0 flex-col md:mb-0 md:w-64">
                                <span class="title-font font-semibold text-gray-700">{{ $booking->destination }}</span>
                                <span class="mt-1 text-sm text-gray-500">{{ \Carbon\Carbon::parse($booking->date)->format('d M Y') }}</span>
                            </div>
                            <div class="md:flex-grow">
                                @foreach ($tours as $tour)
                                @if ($booking->tour_id == $tour->id)
                                <div class="flex items-center justify-between">
                                    <h2 class="title-font mb-2 text-2xl font-medium text-gray-900">{{ $tour->tour_name }}</h2>
                                    <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-blue-600 hover:text-blue-500 cursor-pointer">Delete History?</button>
                                    </form>
                                </div>
                                <p class="leading-relaxed mb-3">{{ $tour->description }}</p>
                                @endif
                                @endforeach
                                @if ($booking->status == 'cancelled')
                                    <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded">Cancelled</span>
                                @elseif ($booking->status == 'accepted')
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Accepted</span>
                                @else
                                    <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded">Pending</span>
                                @endif
                                <a class="mt-4 flex items-center text-indigo-500"
                                href="{{ route('admin.bookings.show', $booking->id) }}">More Detail
                                    <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                @if ($booking->status === 'pending')
                                <div class="flex justify-end items-center">
                                    <form action="{{ route('admin.bookings.accept', $booking->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">Accept Booking</button>
                                    </form>
                                    <form action="{{ route('admin.bookings.cancel', $booking->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="focus:outline-none text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2">Cancel Booking</button>
                                    </form>

                                </div>
                                @endif
                            </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
</x-admin-layout>

<script>
    document.getElementById('all-bookings-button').addEventListener('click', function() {
        window.location.href = "{{ route('admin.bookings.index') }}";
    });

    document.getElementById('accepted-bookings-button').addEventListener('click', function() {
        window.location.href = "{{ route('admin.bookings.filter', ['filterStatus' => 'accepted']) }}";
    });

    document.getElementById('cancelled-bookings-button').addEventListener('click', function() {
        window.location.href = "{{ route('admin.bookings.filter', ['filterStatus' => 'cancelled']) }}";
    });
    document.getElementById('pending-bookings-button').addEventListener('click', function() {
        window.location.href = "{{ route('admin.bookings.filter', ['filterStatus' => 'pending']) }}";
    });

</script>
