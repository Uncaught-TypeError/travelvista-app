<x-frontend-layout>
    <x-slot name="content">

        {{-- Package Booking Step Three --}}
        <section class="mt-28 pt-5 flex flex-col justify-center items-center">
            <div class="px-10">
                <div class="flex justify-center items-center px-3 py-10 text-center">
                    <span class="text-3xl font-bold text-center">Complete your booking</span>
                </div>
                <div class="mb-5 text-center sm:text-left">
                    <span class="font-semibold text-xl">Personal Info Verification</span>
                    <div class="mt-2">
                        <p class="text-sm p-1">Please review and confirm your personal information below.</p>
                        <p class="flex p-1 text-sm text-red-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            <span>Ensuring accurate details is essential to prevent any potential issues</span>
                        </p>
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <span class="font-semibold text-center sm:text-left">Email address</span>
                    <span class="text-sm py-1 text-center sm:text-left">We will send the receipt and more tour details to this address.</span>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                            <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="" value="{{ $mergedPackage['email'] }}" autocomplete="off" disabled />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <span class="font-semibold text-center sm:text-left">Name</span>
                    <span class="text-sm py-1 text-center sm:text-left">We will use this to personalize your account experience.</span>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                            <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="" value="{{ Auth::user()->name }}" autocomplete="off" disabled />
                        </div>
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <span class="font-semibold text-center sm:text-left">Contact no</span>
                    <span class="text-sm py-1 text-center sm:text-left">We will use this in case of any query.</span>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 w-full">
                            <input type="text" name="" id="" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="" value="{{ Auth::user()->profile?->phone }}" autocomplete="off" disabled />
                        </div>
                    </div>
                </div>
                <div>
                    <span class="font-semibold text-xl">Select Payment Method</span>
                    <div class="flex justify-between gap-5 mt-5">
                        <div class="border border-gray-600 hover:bg-gray-100 cursor-pointer rounded-lg flex flex-col justify-center items-center w-1/3 p-4">
                            <img width="35" height="35" src="https://img.icons8.com/glyph-neue/64/B4B4B4/bank-card-back-side.png" alt="bank-card-back-side"/>
                            <span class="mt-2 text-gray-500 hidden sm:block">Credit card</span>
                        </div>
                        <div class="border rounded-lg hover:bg-gray-100 cursor-pointer flex flex-col justify-center items-center w-1/3 p-4">
                            <img width="35" height="35" src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/48/B4B4B4/external-paypal-social-media-tanah-basah-glyph-tanah-basah.png" alt="external-paypal-social-media-tanah-basah-glyph-tanah-basah"/>
                            <span class="mt-2 text-gray-500 hidden sm:block">PayPal</span>
                        </div>
                        <div class="border rounded-lg hover:bg-gray-100 cursor-pointer flex flex-col justify-center items-center w-1/3 p-4">
                            <img width="35" height="35" class="rounded-lg" src="{{ asset('images/kpay.png') }}" alt="bank-card-back-side"/>
                            <span class="mt-2 text-gray-500 hidden sm:block">Kpay</span>
                        </div>
                    </div>
                </div>
                <form action="{{ route('bookings.tour.store.createThree') }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
                        <div class="flex flex-col gap-4 sm:flex-row sm:gap-3 mt-5">
                            <div class="flex-1">
                                <span class="font-semibold">Expiration Month</span>
                                <div class="flex items-center mt-2">
                                    <div class="flex justify-center items-center shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 bg-gray-50 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-1 justify-center items-center w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                        <input type="text" name="" id="" autocomplete="off" class="block w-full border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="MM" required />
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1">
                                <span class="font-semibold">Expiration Year</span>
                                <div class="flex items-center mt-2">
                                    <div class="flex justify-center items-center shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 bg-gray-50 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-600">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-1 justify-center items-center w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                        <input type="text" name="" id="" autocomplete="off" class="block w-full border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="YY" required />
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1">
                                <span class="font-semibold">Security Code</span>
                                <div class="flex items-center mt-2">
                                    <div class="flex justify-center items-center shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 bg-gray-50 p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-1 justify-center items-center w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                                        <input type="text" name="" id="" autocomplete="off" class="block w-full border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="123" required />
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
                <div class="flex flex-col sm:flex-row justify-between">
                    <div class="p-4 flex flex-col text-center sm:text-left items-center sm:items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 mb-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        <span class="font-semibold">Your information is safe</span>
                        <p class="mt-2 text-sm">We will not sell or rent your personal contact <br>
                            information for any marketing purposes <br>
                            whatsoever.
                        </p>
                    </div>
                    <div class="p-4 flex flex-col text-center sm:text-left items-center sm:items-start">
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

    </x-slot>
</x-frontend-layout>
