<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="scroll-smooth relative antialiased">

        @include('reuse_codes._navigation')

        <section class="">
                <div class="relative">
                    <div class="py-28 sm:py-0">
                        <!-- Make Image Center of the Screen -->
                        <img src="{{ asset('images/background.jpg') }}" class="h-screen w-full object-none sm:object-cover" alt="">
                    </div>
                    <div class="absolute flex justify-center items-center flex-col inset-0">
                        <span class="text-white font-rozha text-6xl sm:text-7xl md:text-8xl py-1">Travel Vista</span>
                        <span class="text-white font-roboto text-lg tracking-widest py-1">One for All</span>
                        <a href="{{ route('bookings.index') }}" class="text-white py-3 px-5 border border-white mt-10 hover:bg-black hover:bg-opacity-40">Let's Go</a>
                    </div>
                </div>
            </div>
        </section>

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

        <section class="bg-white min-h-screen flex justify-center items-center flex-col">
            <div class="flex flex-col justify-center items-center">
                <div class="py-4">
                    <span class="font-rozha text-4xl sm:text-5xl">This is Our Story</span>
                </div>
                <div class="max-w-3xl px-5 text-center leading-loose">
                    <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit ullam magni ducimus voluptatum expedita aliquid repellat totam sint provident, ipsa inventore voluptates culpa eveniet perferendis vitae eius unde obcaecati! Perferendis.</span>
                </div>
                <div class="py-3 px-5 mt-10">
                    <a href="{{ route('abouts.index') }}" class="py-3 px-5 border border-black hover:bg-gray-200">
                        Read More
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mt-10">
                <div class="bg-gray-400 h-[1px] w-[250px]"></div>
                <div class="bg-gray-400 h-[1px] w-[50px] mt-5"></div>
            </div>
        </section>
        <section class="bg-gray-50 min-h-screen flex justify-center items-center flex-col">
            <div class="mb-12 mt-10 lg:mb-32 xl:mt-0 text-center flex justify-center items-center">
                <span class="font-rozha text-4xl sm:text-5xl">What Makes Us Special</span>
            </div>
            <div class="flex flex-row">
                <div class="flex flex-col lg:flex-row justify-center items-center gap-4">
                    <div class="flex flex-col text-center justify-center items-center max-w-md">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/national-park.png" alt="national-park"/>
                        <span class="font-rozha p-7 text-2xl">Handpicked Adventures</span>
                        <span class="leading-loose text-center text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aspernatur at quidem deserunt, non quae!</span>
                    </div>
                    <div class="flex flex-col text-center justify-center p-5 items-center max-w-md">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/google-maps.png" alt="google-maps"/>
                        <span class="font-rozha p-7 text-2xl">Local Expert Guides</span>
                        <span class="leading-loose text-center text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aspernatur at quidem deserunt, non quae!</span>
                    </div>
                    <div class="flex flex-col text-center justify-center p-5 items-center max-w-md">
                        <img width="50" height="50" src="https://img.icons8.com/ios/50/beach.png" alt="beach"/>
                        <span class="font-rozha p-7 text-2xl">Hidden Gem Destinations</span>
                        <span class="leading-loose text-center text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aspernatur at quidem deserunt, non quae!</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-10">
            <div class="relative p-1">
                <video id="video" muted poster="{{ asset('images/travel_tumbnail.png') }}">
                    <source src="{{ asset('videos/travel.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="w-full h-full absolute top-0 left-0 z-20 cursor-pointer bg-black bg-opacity-50" id="videoOverlay"></div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 sm:w-14 md:w-20 sm:h-14 md:h-20 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30 cursor-pointer text-gray-300 transition play" id="playBtn">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 sm:w-14 md:w-20 sm:h-14 md:h-20 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30 cursor-pointer text-gray-300 transition hidden pause" id="pauseBtn">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25v13.5m-7.5-13.5v13.5" />
                </svg>
            </div>
            <div class="flex flex-col sm:flex-row p-1 bg-gray-100 gap-1">
                <div class="max-w-full relative overflow-hidden">
                    <img src="{{ asset('images/pexels-francesco-ungaro-17376444.jpg') }}" class="w-full h-full object-cover" alt="">
                    <div class="PopNote w-full h-full top-0 left-0 absolute bg-transparent">
                        <div class="flex flex-col justify-center items-center w-full text-2xl bottom-0 left-1/2 absolute opacity-0 spans">
                            <span class="font-rozha text-2xl text-white">Beach Tour</span>
                            <span class="font-roboto font-light text-white">Kuruko Beach - Carribean Sea</span>
                            <span class="font-roboto font-light text-sm text-white">Rating 3/5</span>
                        </div>
                    </div>
                </div>
                <div class="max-w-full relative overflow-hidden">
                    <img src="{{ asset('images/pexels-te-lensfix-1371360.jpg') }}" class="w-full h-full object-cover" alt="">
                    <div class="PopNote w-full h-full top-0 left-0 absolute bg-transparent">
                        <div class="flex flex-col justify-center items-center w-full text-2xl bottom-0 left-1/2 absolute opacity-0 spans">
                            <span class="font-rozha text-2xl text-white">Lake Tour</span>
                            <span class="font-roboto font-light text-white">Inlay Lake - Shan State</span>
                            <span class="font-roboto font-light text-sm text-white">Rating 4/5</span>
                        </div>
                    </div>
                </div>
                <div class="max-w-full relative overflow-hidden">
                    <img src="{{ asset('images/pexels-luis-ruiz-991422.jpg') }}" class="w-full h-full object-cover" alt="">
                    <div class="PopNote w-full h-full top-0 left-0 absolute bg-transparent">
                        <div class="flex flex-col justify-center items-center w-full text-2xl bottom-0 left-1/2 absolute opacity-0 spans">
                            <span class="font-rozha text-2xl text-white">Mountain Tour</span>
                            <span class="font-roboto font-light text-white">Mount Everest - Tibat</span>
                            <span class="font-roboto font-light text-sm text-white">Rating 3/5</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="mt-10">
                    <a href="" class="text-black text-sm sm:text-base border border-black hover:bg-gray-200 py-2 md:py-3 px-3 sm:px-4 md:px-5">Learn More</a>
                </div>
            </div>
        </section>
        <section class="min-h-screen flex justify-center items-center bg-gray-50">
            <div class="flex flex-col justify-center items-center text-center">
                <span class="uppercase font-roboto font-extrabold text-4xl md:text-6xl xl:text-7xl p-4 text-mask">Travel for all walks of life</span>
                <span class="max-w-3xl text-sm leading-loose text-center sm:text-base normal-case">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatem in recusandae exercitationem. Ducimus sit eaque alias ut quas doloremque adipisci sint non dolores iusto debitis quasi cumque odio quisquam rem optio dolor omnis vero est dolorem quos, accusamus nulla.</span>
            </div>
        </section>
        <section class="mt-10 mb-20">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize font-rozha text-4xl sm:text-5xl">Tours & Packages</span>
                    <span class="text-base pt-2">Famous tours and packages we provided</span>
                </div>
            </section>
            <section class="flex flex-col justify-center items-center mt-5 w-full sm:w-auto mx-0 sm:mx-24 rounded-lg">
                <div class="flex justify-center items-center flex-wrap gap-4 p-5">
                    @foreach ($tours as $tour)
                        <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl ">
                            <a href="{{ route('offers.view.TourDetail', $tour->id) }}">
                                <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                                    @if ($tour->image && Storage::exists($tour->image))
                                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ Storage::url($tour->image) }}">
                                    @else
                                        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                                    @endif
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
                                <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-100 items-center content-center mt-3">
                                    <a href="" class="text-black text-sm">Book Now</a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    @foreach ($packages as $package)
                        <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl ">
                            <a href="{{ route('offers.view.PackageDetail', $package->id) }}">
                                <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                                    @if ($package->image && Storage::exists($package->image))
                                        <img alt="content" class="object-cover object-center h-full w-full" src="{{ Storage::url($package->image) }}">
                                    @else
                                        <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                                    @endif
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
                                <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-100 items-center content-center mt-3">
                                    <a href="" class="text-black text-sm">Book Now</a>
                                </div>
                            </a>

                        </div>
                    @endforeach
                </div>
                <div class="flex flex-row justify-center items-center m-3">
                    <a href="{{ route('offers.index') }}" class="border border-black text-black rounded-xl hover:bg-gray-100 items-center content-center py-2 px-5 text-sm">Show More</a>
                </div>
            </section>
        </section>
        <section class="h-screen text-center flex justify-center items-center bg-cover bg-center" style="background-image: url('{{ asset('images/pexels-joyston-judah-933054.jpg') }}')">
            <div class="flex justify-center text-center items-center flex-col">
                <div class="flex flex-col items-center space-y-10">
                    <span class="capitalize font-rozha text-3xl sm:text-4xl text-white">Testimonials</span>
                    <div class="flex flex-col items-center text-center">
                        <div class="p-3">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-6 h-6 text-gray-50 mb-4" viewBox="0 0 975.036 975.036">
                                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                                </svg>
                                <span class="font-rozha p-3 text-2xl sm:text-3xl text-white">I love the Bagan Trip. It was a very enjoyable spent of time!</span>
                            </div>
                            <div class="flex flex-row items-center justify-center text-center p-3">
                                <img alt="testimonial" src="../images/pexels-luis-ruiz-991422.jpg" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                                <span class="font-roboto font-light pl-3 text-white">- Clara Wattson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-center flex flex-col justify-center items-center mt-14">
            <div class="flex flex-col text-center">
                <span class="uppercase font-roboto font-bold text-4xl sm:text-5xl p-1">
                    Share your
                </span>
                <span class="uppercase font-roboto font-bold text-4xl sm:text-5xl p-1">
                    #vista moments!
                </span>
                <span class="text-base font-roboto font-light pt-2 tracking-wide">Share your fun moments and Tag us! <a href="" class="underline">#vista</a></span>
            </div>
            <div class="flex justify-center items-center w-full mt-5mx-16 rounded-lg relative">
                <div class="flex flex-row flex-wrap justify-center items-center content-start my-3">
                    <div class="hidden 2xl:block w-10 h-10 overflow-hidden m-3 opacity-70">
                        <img src="../images/selfies/selfie-portrait-videocall.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="hidden 2xl:block w-20 h-20 overflow-hidden m-3 opacity-70">
                        <img src="../images/selfies/delighted-young-man-trendy-checkered-shirt-spending-time-outdoor-exploring-surroundings-morning.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="w-44 h-44 overflow-hidden m-3 transition-transform transform hover:scale-110">
                        <img src="../images/selfies/blogger-asian-backpacker-woman-record-vlog-video-top-mountain-young-female-happy-using-mobile-phone-make-vlog-video-enjoy-holidays-hiking-adventure.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="w-44 h-44 overflow-hidden m-3 transition-transform transform hover:scale-110">
                        <img src="../images/selfies/close-up-view-handsome-caucasian-hiker-wearing-snapback-looking-with-happy-smile-while-taking-selfie-with-amazing-landscape-with-waterfall.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="w-44 h-44 overflow-hidden m-3 transition-transform transform hover:scale-110">
                        <img src="../images/selfies/delighted-young-man-trendy-checkered-shirt-spending-time-outdoor-exploring-surroundings-morning.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="w-44 h-44 overflow-hidden m-3 transition-transform transform hover:scale-110">
                        <img src="../images/selfies/happy-camping-girl-forest-taking-self-photo.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="w-44 h-44 overflow-hidden m-3 transition-transform transform hover:scale-110">
                        <img src="../images/selfies/selfie-portrait-videocall.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="w-44 h-44 overflow-hidden m-3 transition-transform transform hover:scale-110">
                        <img src="../images/pexels-te-lensfix-1371360.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="hidden 2xl:block w-20 h-20 overflow-hidden m-3 opacity-70">
                        <img src="../images/selfies/happy-camping-girl-forest-taking-self-photo.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                    <div class="hidden 2xl:block w-10 h-10 overflow-hidden m-3 opacity-70">
                        <img src="../images/selfies/blogger-asian-backpacker-woman-record-vlog-video-top-mountain-young-female-happy-using-mobile-phone-make-vlog-video-enjoy-holidays-hiking-adventure.jpg" class="object-cover w-full h-full cursor-pointer" alt="">
                    </div>
                </div>
                <div class="hidden absolute left-0 top-[45%] xl:block w-10 h-10 overflow-hidden xl:mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black bg-gray-300 rounded-full p-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </div>
                <div class="hidden absolute right-0 top-[45%] xl:block w-10 h-10 overflow-hidden xl:mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black bg-gray-300 rounded-full p-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
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
