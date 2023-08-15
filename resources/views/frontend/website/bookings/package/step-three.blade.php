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

        <section class="mt-28 py-5 flex flex-col justify-center items-center">
            <div>
                <div class="flex justify-center items-center px-3 py-10">
                    <span class="text-3xl font-bold">Complete your booking</span>
                </div>
                <div class="mb-5">
                    <span class="font-semibold text-xl">Personal Info Verification</span>
                    <div class="mt-2">
                        <p class="text-sm p-1">Please review and confirm your personal information below.</p>
                        <p class="flex p-1 text-sm text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            Ensuring accurate details is essential to prevent any potential issues
                        </p>
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <span class="font-semibold">Email address</span>
                    <span class="text-sm py-1">We will send the receipt and more tour details to this address.</span>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                            <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="" value="{{ $mergedPackage['email'] }}" autocomplete="off" disabled />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <span class="font-semibold">Name</span>
                    <span class="text-sm py-1">We will use this to personalize your account experience.</span>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                            <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="" value="{{ Auth::user()->name }}" autocomplete="off" disabled />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <span class="font-semibold">Contact no</span>
                    <span class="text-sm py-1">We will use this in case of any query.</span>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                            <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="" value="{{ Auth::user()->profile?->phone }}"                            autocomplete="off" disabled />
                        </div>
                    </div>
                </div>
                <div>
                    <span class="font-semibold text-xl">Select Payment Method</span>
                    <div class="flex justify-between gap-5 mt-5">
                        <div class="border border-gray-600 hover:bg-gray-100 cursor-pointer rounded-lg flex flex-col justify-center items-center w-1/3 p-4">
                            <img width="35" height="35" src="https://img.icons8.com/glyph-neue/64/B4B4B4/bank-card-back-side.png" alt="bank-card-back-side"/>
                            <span class="mt-2 text-gray-500">Credit or debit card</span>
                        </div>
                        <div class="border rounded-lg hover:bg-gray-100 cursor-pointer flex flex-col justify-center items-center w-1/3 p-4">
                            <img width="35" height="35" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/B4B4B4/external-paypal-social-media-tanah-basah-glyph-tanah-basah.png" alt="external-paypal-social-media-tanah-basah-glyph-tanah-basah"/>
                            <span class="mt-2 text-gray-500">PayPal</span>
                        </div>
                        <div class="border rounded-lg hover:bg-gray-100 cursor-pointer flex flex-col justify-center items-center w-1/3 p-4">
                            <img width="35" height="35" class="rounded-lg" src="{{ asset('images/kpay.png') }}" alt="bank-card-back-side"/>
                            <span class="mt-2 text-gray-500">Kpay</span>
                        </div>
                    </div>
                </div>
                <form action="{{ route('pbookings.store.stepThree') }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    <div class="mt-5">
                        <div class="mb-3">
                            <span class="font-semibold">Card number</span>
                            <div class="flex mt-2">
                                <div class="flex justify-center items-center shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 bg-gray-50 p-2">
                                    <img width="20" height="20" src="https://img.icons8.com/glyph-neue/64/B4B4B4/bank-card-back-side.png" alt="bank-card-back-side"/>
                                </div>
                                <div class="flex w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                    <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="1234-1234-1234-1234" required />
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-5 gap-3">
                            <div class="">
                                <span class="font-semibold">Expiration Month</span>
                                <div class="flex mt-2">
                                    <div class="flex justify-center items-center shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 bg-gray-50 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>
                                    </div>
                                    <div class="flex w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                        <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="MM" required />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="font-semibold">Expiration Year</span>
                                <div class="flex mt-2">
                                    <div class="flex justify-center items-center shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 bg-gray-50 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                        </svg>
                                    </div>
                                    <div class="flex w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                        <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="yy" required />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="font-semibold">Security Code</span>
                                <div class="flex mt-2">
                                    <div class="flex justify-center items-center shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 bg-gray-50 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </div>
                                    <div class="flex w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                        <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="123" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-7">
                        <button type="submit" class="w-full flex p-2 hover:bg-gray-700 bg-gray-800 text-white justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <span>Proceed to Checkout</span>
                        </button>
                    </div>
                </form>
                <div class="mt-4">
                    <a href="" class="w-full hover:bg-gray-100 flex p-2 ring-1 ring-inset ring-black justify-center items-center">
                        <span>Have a discount code ? Click to enter</span>
                    </a>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="p-4 flex flex-col">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        <span class="font-semibold">Your information is safe</span>
                        <p class="mt-2 text-sm">We will not sell or rent your personal contact <br>
                            information for any marketing purposes <br>
                            whatsoever.</p>
                    </div>
                    <div class="p-4 flex flex-col">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <span class="font-semibold">Secure checkout</span>
                        <p class="mt-2 text-sm">All information is encrypted and transmitted <br>
                            without risk using a secure
                            Sockets Layer protocol.
                            <br>
                            You can trust us!
                        </p>
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
