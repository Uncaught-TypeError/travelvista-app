<footer class="body-font bg-slate-100 text-gray-600 mt-10">
    <div class="container mx-auto flex flex-col flex-wrap px-5 py-10 md:flex-row md:flex-nowrap md:items-center lg:items-start">
        <div class="mx-auto w-auto sm:w-72 flex-shrink-0 text-center md:mx-0 md:text-left">
            <a class="title-font flex items-center justify-center font-medium text-gray-900 md:justify-start">
                <img src="{{ asset('images/logo.png') }}" class="w-12 h-12" alt="">
                <div class="flex flex-col">
                    <span class="ml-2 text-xl">Vista</span>
                    <span class="ml-2 text-sm font-light">One for All</span>
                </div>
            </a>
            <p class="mt-2 text-sm text-gray-500 p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus alias, repellendus vel dicta aperiam tempora.</p>
        </div>
        <div class="flex flex-col md:flex-row text-center md:text-start justify-center md:justify-end w-full gap-5 md:gap-10 items-center md:items-start mt-5 md:mt-0">
            <div class="pr-0 md:pr-3">
                <nav class="md:mb-10 list-none">
                    <li class="p-1">
                        <a href="{{ route('abouts.index') }}" class="text-gray-600 hover:text-gray-800 cursor-pointer">About</a>
                    </li>
                    <li class="p-1">
                        <a href="{{ route('bookings.tour.index') }}" class="text-gray-600 hover:text-gray-800 cursor-pointer">Tours</a>
                    </li>
                    <li class="p-1">
                        <a href="{{ route('pbookings.package.index') }}" class="text-gray-600 hover:text-gray-800 cursor-pointer">Packages</a>
                    </li>
                    <li class="p-1">
                        <a href="{{ route('contacts.index') }}" class="text-gray-600 hover:text-gray-800 cursor-pointer">Contact</a>
                    </li>
                </nav>
            </div>
            <div class="pr-0 md:pl-3">
                <nav class="md:mb-10 list-none">
                    <li class="p-1">
                        <a class="text-gray-600 hover:text-gray-800 cursor-pointer">Facebook</a>
                    </li>
                    <li class="p-1">
                        <a class="text-gray-600 hover:text-gray-800 cursor-pointer">Instagram</a>
                    </li>
                </nav>
            </div>
            <div class="w-40 p-0 md:p-4 flex items-center flex-row justify-center">
                <div class="py-2 md:py-3 px-3 sm:px-4 md:px-5 bg-gray-700 hover:bg-gray-600">
                    <a href="{{ route('bookings.index') }}" class="text-sm sm:text-base font-semibold text-white">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-100">
        <div class="container mx-auto flex flex-col flex-wrap px-5 py-4 sm:flex-row">
        <p class="text-center text-sm text-gray-500 sm:text-left">
            © 2020 TravelVista —
            <a href="https://twitter.com/aungchitmin_dev" rel="noopener noreferrer" class="ml-1 text-gray-600" target="_blank">@nosleep.dev</a>
        </p>
        <span class="mt-2 inline-flex justify-center sm:ml-auto sm:mt-0 sm:justify-start">
            <a class="text-gray-500 image-container">
                <img class="h-5 w-5 first-image" src="https://img.icons8.com/ios/50/facebook-f.png" alt="facebook-f"/>
                <img class="h-5 w-5 second-image" src="https://img.icons8.com/ios/50/357ED3/facebook-f.png" alt="facebook-f"/>
            </a>
            <a class="ml-3 text-gray-500 image-container">
                <img class="h-5 w-5 first-image" src="https://img.icons8.com/ios/50/twitterx.png" alt="twitterx"/>
                <img class="h-5 w-5 second-image" src="https://img.icons8.com/ios-filled/50/twitterx.png" alt="twitterx"/>
            </a>
            <a class="ml-3 text-gray-500 image-container">
                <img class="h-5 w-5 first-image" src="https://img.icons8.com/ios/50/instagram-new--v1.png" alt="instagram-new--v1"/>
                <img class="h-5 w-5 second-image" src="https://img.icons8.com/ios/50/A045F6/instagram-new--v1.png" alt="instagram-new--v1"/>
            </a>
            <a class="ml-3 text-gray-500 image-container">
                <img class="h-5 w-5 first-image" src="https://img.icons8.com/ios/50/linkedin.png" alt="linkedin"/>
                <img class="h-5 w-5 second-image" src="https://img.icons8.com/ios-filled/50/linkedin.png" alt="linkedin"/>
            </a>
        </span>
        </div>
    </div>
</footer>
