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
                </div>
            </div>
        </section>
        <section class="mt-20">
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
                            <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                                <img src="{{ $tour->image }}" class="object-cover w-full h-full" alt="Tour Image">
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
                            <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-200 items-center content-center mt-3">
                                <a href="" class="text-black text-sm">Book Now</a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class="flex flex-row justify-center items-center m-3">
                    <div id="showMoreButtonTour" class="py-2 px-5 border border-black text-black rounded-xl hover:bg-gray-100 items-center content-center mt-3">
                        <span class="text-sm">Show More</span>
                    </div>
                </div>
            </section>
        </section>
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
                            <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                                <img src="{{ $package->image }}" class="object-cover w-full h-full" alt="">
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
                            <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-200 items-center content-center mt-3">
                                <a href="" class="text-black text-sm">Book Now</a>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class="flex flex-row justify-center items-center m-3">
                    <div id="showMoreButtonPackage" class="py-2 px-5 border border-black text-black rounded-xl hover:bg-gray-100 items-center content-center mt-3">
                        <span class="text-sm">Show More</span>
                    </div>
                </div>
            </section>
        </section>
        @include('reuse_codes._footer')
    </body>
</html>

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