<x-frontend-layout>
    <x-slot name="content">

        {{-- Tour and Package --}}
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

    </x-slot>
</x-frontend-layout>

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

