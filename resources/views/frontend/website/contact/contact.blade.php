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
                <video src="../videos/vflower.mp4" class="relative w-full h-full object-cover" autoplay muted loop></video>
            </div>
        
            <!-- Transparent Overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-30"></div>
        
            <div class="relative z-10 flex justify-center items-center min-h-screen">
                <div class="flex flex-col justify-center items-center text-center">
                    <span class="uppercase font-roboto font-extrabold text-4xl md:text-5xl xl:text-7xl p-4 text-white">Travel with US</span>
                    <span class="max-w-3xl text-sm leading-loose text-center sm:text-base normal-case text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque ut natus, culpa odio maiores provident atque, iusto obcaecati dicta expedita a repellat. Minima repellat eaque necessitatibus aperiam nobis, culpa totam.</span>
                    <span class="max-w-3xl text-sm leading-loose text-center sm:text-base normal-case text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, voluptate.</span>
                    <span class="max-w-3xl text-sm leading-loose text-center sm:text-base normal-case text-white">Mail: vista@gmail.com</span>
                    <span class="max-w-3xl text-sm leading-loose text-center sm:text-base normal-case text-white">Tel: 123-456-7890</span>
                </div>
            </div>
        </section>
    
        <section class="body-font relative text-gray-600 mt-10">
            <div class="absolute inset-0 bg-gray-300">
                <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.434059705293!2d96.1513908105849!3d16.804809319260162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eca76d77b75f%3A0xf2a90867ee044ef8!2sVista%20Bar!5e0!3m2!1sen!2smm!4v1691429468005!5m2!1sen!2smm" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                </div>
                <div class="container mx-auto flex px-5 py-24">
                    <div class="relative z-10 mt-10 flex w-full flex-col rounded-lg bg-white p-8 shadow-md md:ml-auto md:mt-0 md:w-1/2 lg:w-1/3">
                        <h2 class="title-font mb-1 text-lg font-medium text-gray-900">Contact Us</h2>
                        <p class="mb-5 leading-relaxed text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                        <div class="relative mb-4">
                        <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 bg-white px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-gray-500 focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="relative mb-4">
                        <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
                        <textarea id="message" name="message" class="h-32 w-full resize-none rounded border border-gray-300 bg-white px-3 py-1 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-gray-500 focus:ring-2 focus:ring-gray-200"></textarea>
                        </div>
                        <button class="rounded border-0 bg-gray-500 px-6 py-2 text-lg text-white hover:bg-gray-600 focus:outline-none">Button</button>
                        <p class="mt-3 text-xs text-gray-500">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
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