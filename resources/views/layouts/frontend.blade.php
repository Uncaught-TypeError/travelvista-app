<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&family=Rozha+One&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="scroll-smooth relative antialiased">

        {{-- NavBar --}}
        @include('reuse_codes._navigation')

        {{-- Success Message --}}
        @if (Session::has('success'))
            <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-green-100 px-6 py-2.5 sm:px-3.5 sm:before:flex-1" x-data="{open: true}" x-show="open">
            <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#a8ff80] to-[#a8ff80] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
            </div>
            <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#a8ff80] to-[#a8ff80] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
            </div>
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                <p class="text-sm leading-6 text-gray-900">
                <strong class="font-semibold">Status</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>{{ Session::get('success') }}
                </p>
            </div>
            <div class="flex flex-1 justify-end">
                <button @click="open = false" type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                <span class="sr-only">Dismiss</span>
                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
                </button>
            </div>
            </div>
        @endif

        {{-- Danger Message --}}
        @if (Session::has('danger'))
            <div class="relative isolate flex items-center gap-x-6 overflow-hidden bg-red-100 px-6 py-2.5 sm:px-3.5 sm:before:flex-1" x-data="{open: true}" x-show="open">
            <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff8080] to-[#fc8989] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
            </div>
            <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
                <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff8080] to-[#fc8989] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
            </div>
            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                <p class="text-sm leading-6 text-gray-900">
                <strong class="font-semibold">Status</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>{{ Session::get('danger') }}
                </p>
            </div>
            <div class="flex flex-1 justify-end">
                <button @click="open = false" type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
                <span class="sr-only">Dismiss</span>
                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
                </button>
            </div>
            </div>
        @endif

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

        {{ $content }}

        {{-- Footer --}}
        @include('reuse_codes._footer')
    </body>
</html>

{{-- Nav DropDown Script --}}
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

{{-- Video Script --}}
<script>
    const video = document.getElementById('video');
    const videoLayer = document.getElementById('videoOverlay');
    const playBtn = document.getElementById('playBtn');
    const pauseBtn = document.getElementById('pauseBtn');

    playBtn.addEventListener('click', togglePlayPause);
    pauseBtn.addEventListener('click', togglePlayPause);

    function togglePlayPause() {
        if (video.paused) {
            video.play();
            playBtn.classList.toggle('hidden');
            pauseBtn.classList.toggle('hidden');
            videoLayer.classList.toggle('bg-black');
        } else {
            video.pause();
            playBtn.classList.toggle('hidden');
            pauseBtn.classList.toggle('hidden');
            videoLayer.classList.toggle('bg-black');
        }
    }
    // Show the playBtn when video is paused or ended
    video.addEventListener('pause', () => {
        playBtn.classList.remove('hidden');
        pauseBtn.classList.add('hidden');
        videoLayer.classList.add('bg-black');
    });
    video.addEventListener('ended', () => {
        playBtn.classList.remove('hidden');
        pauseBtn.classList.add('hidden');
        videoLayer.classList.remove('bg-black');
    });
</script>

{{-- Show More Tour --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const showMoreButton = document.getElementById('showMoreButtonTour');
        const tourItems = document.querySelectorAll('.tour-item');
        const step = 3;

        let visibleItems = step;

        function toggleTourItems() {
            for (let i = 0; i < tourItems.length; i++) {
                if (i < visibleItems) {
                    tourItems[i].classList.remove('hidden');
                } else {
                    tourItems[i].classList.add('hidden');
                }
            }

            if (visibleItems >= tourItems.length) {
                showMoreButton.style.display = 'none';
            } else {
                showMoreButton.style.display = 'block';
            }
        }

        toggleTourItems(); // Initial display

        showMoreButton.addEventListener('click', () => {
            visibleItems += step;
            toggleTourItems();
        });
    });
</script>

{{-- Show More Package --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const showMoreButton = document.getElementById('showMoreButtonPackage');
        const packageItems = document.querySelectorAll('.package-item');
        const step = 3;

        let visibleItems = step;

        function togglePackageItems() {
            for (let i = 0; i < packageItems.length; i++) {
                if (i < visibleItems) {
                    packageItems[i].classList.remove('hidden');
                } else {
                    packageItems[i].classList.add('hidden');
                }
            }

            if (visibleItems >= packageItems.length) {
                showMoreButton.style.display = 'none';
            } else {
                showMoreButton.style.display = 'block';
            }
        }

        togglePackageItems(); // Initial display

        showMoreButton.addEventListener('click', () => {
            visibleItems += step;
            togglePackageItems();
        });
    });
</script>

<script src="{{ mix('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
