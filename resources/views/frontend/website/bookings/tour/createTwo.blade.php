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
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="py-12">
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="m-2 flex p-2">
                                <a href="{{ route('bookings.tour.createOne', $tour_id) }}" class="py-2 text-indigo-500 hover:text-indigo-700">Back</a>
                            </div>
                            <div class="m-2 p-2">
                                <form method="POST" action="{{ route('bookings.tour.store.createTwo') }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                <div class="space-y-12">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-2xl font-semibold leading-7 text-gray-900 pb-2">Booking Step Two</h2>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">This new booking will be displayed publicly so be careful what you create.</p>

                                        <div class="col-span-full mt-10">
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
                                        <a href="{{ route('bookings.tour.index') }}">Cancel</a>
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
                    </div>
                </div>
            </div>
        </section>



        @include('reuse_codes._footer')
    </body>
</html>

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
