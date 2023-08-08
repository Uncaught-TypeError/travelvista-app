<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="m-2 flex p-2">
                            <a href="{{ route('admin.bookings.createOne') }}" class="py-2 text-indigo-500 hover:text-indigo-700">Back</a>
                        </div>
                        <div class="m-2 p-2">
                            <form method="POST" action="{{ route('admin.bookings.store.createTwo') }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2 class="text-2xl font-semibold leading-7 text-gray-900 pb-2">Booking Step Two</h2>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">This new booking will be displayed publicly so be careful what you create.</p>

                                    <div class="col-span-full mt-10">
                                        <label for="tours" class="block text-sm font-medium leading-6 text-gray-900">tours</label>
                                        <div class="mt-2">
                                            <select id="tours" class="form-multiselect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-96 p-2.5 dark:placeholder-gray-400 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" name="tour_id">
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

                                    <div class="col-span-full mt-10">
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

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                                    <a href="{{ route('admin.bookings.createTwo') }}">Cancel</a>
                                </button>
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Confirm</button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <section class="body-font text-gray-600">
                            <div class="container mx-auto px-5 py-24">
                                <div class="-m-4 flex flex-wrap">
                                    @foreach ($tours as $tour)
                                        <div class="p-4 lg:w-1/3">
                                            <div class="relative h-full overflow-hidden rounded-lg bg-gray-100 bg-opacity-75 px-8 pb-10 pt-16 text-center">
                                                <h2 class="title-font mb-1 text-xs font-medium tracking-widest text-gray-400">{{ $tour->destination }}</h2>
                                                <h1 class="title-font mb-3 text-xl font-medium text-gray-900 sm:text-2xl">{{ $tour->tour_name }}</h1>
                                                <p class="mb-3 leading-relaxed">{{ $tour->description }}</p>
                                                <a class="inline-flex items-center text-indigo-500"
                                                >More Detail
                                                <svg class="ml-2 h-4 w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                                </a>
                                            {{-- <div class="absolute bottom-0 left-0 mt-2 flex w-full justify-center py-4 text-center leading-none">
                                                <span class="mr-3 inline-flex items-center border-r-2 border-gray-200 py-1 pr-3 text-sm leading-none text-gray-400">
                                                    <svg class="mr-1 h-4 w-4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle></svg
                                                    >1.2K
                                                </span>
                                                <span class="inline-flex items-center text-sm leading-none text-gray-400">
                                                    <svg class="mr-1 h-4 w-4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path></svg
                                                    >6
                                                </span>
                                            </div> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    {{-- @section('scripts') --}}
    <script>
        const validatedData = @json($validatedData);
        const tours = @json($tours);

        // document.addEventListener('DOMContentLoaded', function () {
        // const selectBox = document.getElementById('tours');
        // const tourChoiceContainer = document.getElementById('tourChoiceContainer');

        // function updateTourChoice() {
        //     const selectedOptionValue = selectBox.value;
        //     const selectedOptionText = selectBox.options[selectBox.selectedIndex].text;

        //     tourChoiceContainer.textContent = `${validatedData['num_person']} x [${selectedOptionText}]`;
        // }

        // selectBox.addEventListener('change', updateTourChoice);
        // updateTourChoice();

        // })

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
    {{-- @endsection --}}
</x-admin-layout>
