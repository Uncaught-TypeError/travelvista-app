<x-frontend-layout>
    <x-slot name="content">

        {{-- Tour Booking Step Two --}}
        <section class="mt-28 py-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('bookings.tour.store.createTwo') }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure?')" class="flex flex-col items-center justify-center">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-3xl font-semibold leading-7 text-gray-900 p-5 text-center">Booking Step Two</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600 text-center">Check your information before confirming to avoid any mislead information</p>

                            <div class="col-span-full mt-5 flex flex-col items-center justify-center">
                                <div class="mt-2">
                                    <select id="tours" class="form-multiselect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block sm:w-96 w-auto p-2.5" name="tour_id">
                                        @foreach ($tours as $tour)
                                            <option value="{{ $tour->id }}">{{ $tour->tour_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p class="mt-3 text-sm leading-6 text-gray-600">Choose the tour concerning with the item.</p>
                                @error('tours')
                                    <div class="text-sm text-red-400 mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-span-full mt-10 flex flex-col items-center justify-center">
                                <span class="text-lg underline">Your Booking Information</span>
                                <div class="w-[200px] mt-3 flex flex-col">
                                    <div class="flex justify-between">
                                        <span>Email:</span>
                                        <span>{{ $validatedData['email'] }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Phone:</span>
                                        <span>{{ $validatedData['phone'] }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Address:</span>
                                        <span>{{ $validatedData['address'] }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Date:</span>
                                        <span>{{ $validatedData['date'] }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Destination:</span>
                                        <span>{{ $validatedData['destination'] }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span>Num of Person:</span>
                                        <span>{{ $validatedData['num_person'] }}</span>
                                    </div>
                                </div>
                                <div class="border-b-2 w-[250px] border-gray-400 mt-3"></div>
                                    <div class="w-[250px] mt-3 flex flex-col">
                                        <div class="flex justify-between">
                                            <span>Price:</span>
                                            <span id="tourChoiceContainer">{{ $validatedData['num_person'] }} person x $ Price of your tour</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('contacts.index') }}" class="mt-3 text-red-500 flex justify-center items-center">
                                    Something wrong ?
                                </a>
                            </div>

                            <div class="flex justify-center sm:justify-end gap-x-6">
                                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                                    <a href="{{ route('bookings.tour.index') }}">Cancel</a>
                                </button>
                                <button type="submit" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>
                <section class="body-font text-gray-600 flex flex-col justify-center items-center mt-10">
                    <h2 class="text-3xl font-semibold leading-7 text-gray-900 p-5 text-center">Tour Details</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600 text-center">Want to know about the tour? Check Below</p>
                    <div class="container mx-auto px-5">
                        <div class="flex flex-wrap">
                            @foreach ($tours as $tour)
                                <div class="p-4 lg:w-1/3">
                                    <div class="relative h-full overflow-hidden rounded-lg bg-gray-100 bg-opacity-75 px-8 pb-10 pt-16 text-center">
                                        <h2 class="title-font mb-1 text-xs font-medium tracking-widest text-gray-400">{{ $tour->destination }}</h2>
                                        <h1 class="title-font mb-3 text-xl font-medium text-gray-900 sm:text-2xl">{{ $tour->tour_name }}</h1>
                                        <p class="mb-3 leading-relaxed">{{ $tour->description }}</p>
                                        <a href="{{ route('offers.view.TourDetail', $tour->id) }}" class="inline-flex items-center text-indigo-500"
                                        >More Detail
                                        <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section>

    </x-slot>
</x-frontend-layout>

<script>
    const validatedData = @json($validatedData);
    const tours = @json($tours);

    document.addEventListener('DOMContentLoaded', function () {
        const selectBox = document.getElementById('tours');
        const tourChoiceContainer = document.getElementById('tourChoiceContainer');
        const tours = @json($tours);

        function updateTourChoice() {
            const selectedOptionValue = selectBox.value;
            const selectedTour = tours.find(tour => tour.id == selectedOptionValue);

            if (selectedTour) {
                const selectedTourPrice = selectedTour.price;
                tourChoiceContainer.textContent = `${validatedData['num_person']} person x $ ${selectedTourPrice}`;
            } else {
                tourChoiceContainer.textContent = 'Price not available for the selected tour.';
            }
        }

        selectBox.addEventListener('change', updateTourChoice);
        updateTourChoice();
    });
</script>
