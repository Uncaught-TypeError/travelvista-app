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

        <section class="text-gray-600 body-font mt-28">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="py-12">
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="m-2 flex p-2">
                                <a href="{{ route('pbookings.package.index') }}" class="py-2 text-indigo-500 hover:text-indigo-700">Back</a>
                            </div>
                            <div class="m-2 p-2">
                                <form method="POST" action="{{ route('pbookings.store.stepOne') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="space-y-12">
                                    <div class="border-b border-gray-900/10 pb-12">
                                        <h2 class="text-2xl font-semibold leading-7 text-gray-900 pb-2">Booking Step One</h2>
                                        <p class="mt-1 text-sm leading-6 text-gray-600">This new booking will be displayed publicly so be careful what you create.</p>

                                        <div class="col-span-full mt-10">
                                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Customer Name</label>
                                            <div class="mt-2">
                                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="" id="name" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 capitalize" value="{{ Auth::user()->name }}" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-full mt-10">
                                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Customer Email</label>
                                            <div class="mt-2">
                                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="email" id="email" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ Auth::user()->email }}" readonly />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-span-full mt-10">
                                            <label for="destination" class="block text-sm font-medium leading-6 text-gray-900">Destination</label>
                                            <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="destination" id="destination" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Bagan, etc." value="{{ $packageDestination }}" />
                                            </div>
                                            </div>
                                            @error('destination')
                                            <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                                        <a href="{{ route('pbookings.package.index') }}">Cancel</a>
                                    </button>
                                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Next</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('reuse_codes._footer')
    </body>
</html>


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
