<section class="fixed top-0 left-0 w-full bg-white shadow px-10 py-4 flex flex-row justify-center sm:justify-between items-center z-50">

    {{-- Logo --}}
    <div class="flex flex-row items-center">
        <div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="w-20" alt="Logo">
            </a>
        </div>
        <div class="flex flex-col">
            <span class="font-roboto text-3xl">Travel Vista</span>
            <span class="text-sm text-gray-500 p-1">One for All</span>
        </div>
    </div>

    <!-- Hidden Icon -->
    <div class="sm:hidden absolute top-10 right-5" id="dropdown-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </div>

    {{-- DropDown --}}
    <div class="hidden bg-white fixed top-0 left-0 w-full h-full z-50" id="dropdown-div">
        <div class="flex justify-center items-center flex-col">
            <div class="relative p-5">
                <button type="button" id="dropdown-btn2" class="flex w-full py-2 px-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    @if (Route::has('login'))
                        @auth
                            <span class="pl-2 capitalize">{{ Auth::user()->name }}</span>
                        @endauth
                    @endif
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <ul id="dropdown-menu2" class="absolute hidden z-10 w-36 py-1 mt-2 bg-white">
                    @if (Route::has('login'))
                        @auth
                        @unlessrole('admin')
                            <li class="border-t flex justify-center items-center"><a href="{{ route('userprofile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">My Profile</a></li>
                            <li class="border-t flex justify-center items-center"><a href="{{ route('userbookings.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">My Bookings</a></li>
                        @endunlessrole
                            <li class="border-t flex justify-center items-center"><a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">My Dashboard</a></li>
                            <li class="border-t flex justify-center items-center"><a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">Log Out</a></li>
                        @else
                            <li class="border-t flex justify-center items-center"><a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">Log in</a></li>
                            @if (Route::has('register'))
                                <li class="border-t flex justify-center items-center"><a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
        <div class="flex justify-center items-center flex-col">
            <div class="flex flex-col items-center gap-5">
                <a href="{{ route('abouts.index') }}" class="uppercase font-semibold text-xl p-3 hover:text-gray-500">About</a>
                <a href="{{ route('offers.index') }}" class="uppercase font-semibold text-xl p-3 hover:text-gray-500">Offers</a>
                <a href="{{ route('contacts.index') }}" class="uppercase font-semibold text-xl p-3 hover:text-gray-500">Contact</a>
            </div>
            <div class="mt-10">
                <a href="" class="uppercase text-lg font-semibold text-white bg-gray-600 hover:bg-gray-500 p-3">Book Now</a>
            </div>
        </div>
        <div class="absolute top-10 right-5 hidden" id="close-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>

    <!-- Default Nav View -->
    <div class="sm:flex flex-row items-center hidden">
        <div class="flex flex-row items-center md:gap-5">
            <a href="{{ route('abouts.index') }}" class="uppercase text-sm p-3 hover:text-gray-500">About</a>
            <a href="{{ route('offers.index') }}" class="uppercase text-sm p-3 hover:text-gray-500">Offers</a>
            <a href="{{ route('contacts.index') }}" class="uppercase text-sm p-3 hover:text-gray-500">Contact</a>
            {{-- <a href="{{ route('success.index') }}" class="uppercase text-sm p-3 hover:text-gray-500">Success</a> --}}
        </div>
        <div class="px-2">
            <div class="relative">
                <button type="button" id="dropdown-btn3" class="flex w-full py-2 px-4 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    @if (Route::has('login'))
                        @auth
                            <span class="hidden md:block pl-0 md:pl-2 capitalize">{{ Auth::user()->name }}</span>
                        @endauth
                    @endif
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <ul id="dropdown-menu3" class="absolute hidden z-10 w-36 py-1 mt-2 bg-white">
                    @auth
                    @unlessrole('admin')
                    <li><a href="{{ route('userprofile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">My Profile</a></li>
                    <li><a href="{{ route('userbookings.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">My Bookings</a></li>
                    @endunlessrole
                    <li><a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">Dashboard</a></li>
                    <li class="border-t">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">
                            {{ __('Log Out') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @else
                        <li><a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">Log in</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 hover:text-black">Register</a></li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
        <div class="hidden lg:flex">
            <a href="{{ route('bookings.index') }}" class="uppercase text-sm font-semibold text-white bg-gray-600 hover:bg-gray-500 p-3">Book Now</a>
        </div>
    </div>

</section>
