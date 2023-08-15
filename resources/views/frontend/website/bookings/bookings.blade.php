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

        <div class="relative mt-24 w-full h-screen flex flex-col sm:flex-row">
            <span class="absolute top-1/2 sm:top-1/3 xl:top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-30 text-4xl text-gray-50 transition-opacity opacity-50 hover:opacity-100 uppercase cursor-pointer text-center">Choose your preference</span>
            <div class="relative w-full sm:w-1/2 h-full">
                <img src="https://media.giphy.com/media/3QK1B9Z7zc82ogbskk/giphy.gif" class="absolute w-full h-full gif" alt="">
                <img src="{{ asset('images/gifss2.png') }}" alt="" class="absolute w-full h-full opacity-100" id="removeImg">
                <div class="absolute w-full h-full z-10 hover:opacity-0 blur-layer"
                    onmouseover="changeTextColor(this, true)"
                    onmouseleave="originalView(this)">
                </div>
                @if(auth()->check()) <!-- Check if user is authenticated -->
                    <a href="{{ route('bookings.tour.index') }}" class="absolute top-[50%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 p-4 z-20 font-light text-4xl border border-gray-500 text-layer font-roboto" onmouseleave="resetTextColor(this)" id="textSpan">
                        Tour?
                    </a>
                @else
                    <a href="{{ route('login') }}" class="absolute top-[50%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 p-4 z-20 font-light text-4xl border border-gray-500 text-layer font-roboto" onmouseleave="resetTextColor(this)" id="textSpan">
                        Tour?
                    </a>
                @endif
            </div>
            <div class="relative w-full sm:w-1/2 h-full">
                <img src="https://media.giphy.com/media/MTxPddI9CsbI82OHux/giphy.gif" class="absolute w-full h-full gif" alt="">
                <img src="{{ asset('images/gifss1.png') }}" alt="" class="absolute w-full h-full opacity-100" id="removeImg2">
                <div class="absolute w-full h-full z-10 hover:opacity-0 blur-layer" onmouseover="changeTextColor2(this, true)"
                onmouseleave="originalView2(this)"></div>
                <a href="{{ route('pbookings.package.index') }}" class="absolute top-[50%] left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-gray-500 p-4 z-20 font-light text-4xl border border-gray-500 text-layer font-roboto" id="textSpan2">
                    Package?
                </a>
            </div>
        </div>

        @include('reuse_codes._footer')
    </body>
</html>

<script>
    function changeTextColor(element, isHoverOnDiv) {
        var textSpan = document.getElementById('textSpan');
        var removeImg = document.getElementById('removeImg');
        textSpan.style.color = 'white';
        textSpan.style.borderColor = 'white';
        removeImg.classList.remove('opacity-100');
        removeImg.classList.add('opacity-0');

    if (!isHoverOnDiv) {
        textSpan.classList.add('hover:text-white', 'hover:border-white');
        }
    }

    function originalView(element) {
        var textSpan = document.getElementById('textSpan');
        textSpan.style.color = 'text-gray-500';
        textSpan.style.borderColor = 'border-gray-500';
        removeImg.classList.remove('opacity-0');
        removeImg.classList.add('opacity-100');

        textSpan.classList.remove('hover:text-white', 'hover:border-white');
    }

    function resetTextColor(element){
        var textSpan = document.getElementById('textSpan');
        textSpan.classList.remove('hover:text-white', 'hover:border-white');
        textSpan.classList.add('hover:text-gray-500', 'hover:border-gray-500');
    }

    function changeTextColor2(element, isHoverOnDiv) {
        var textSpan2 = document.getElementById('textSpan2');
        var removeImg2 = document.getElementById('removeImg2');
        textSpan2.style.color = 'white';
        textSpan2.style.borderColor = 'white';
        removeImg2.classList.remove('opacity-100');
        removeImg2.classList.add('opacity-0');

    if (!isHoverOnDiv) {
        textSpan2.classList.add('hover:text-white', 'hover:border-white');
        }
    }

    function originalView2(element) {
        var textSpan2 = document.getElementById('textSpan2');
        textSpan2.style.color = 'text-gray-500';
        textSpan2.style.borderColor = 'border-gray-500';
        removeImg2.classList.remove('opacity-0');
        removeImg2.classList.add('opacity-100');

        textSpan2.classList.remove('hover:text-white', 'hover:border-white');
    }

    function resetTextColor2(element){
        var textSpan2 = document.getElementById('textSpan2');
        textSpan2.classList.remove('hover:text-white', 'hover:border-white');
        textSpan2.classList.add('hover:text-gray-500', 'hover:border-gray-500');
    }
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
