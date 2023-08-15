<x-frontend-layout>
    <x-slot name="content">

        {{-- First Division --}}
        <section class="min-h-screen relative bg-gray-50">
            <div class="absolute top-0 left-0 w-full h-full">
                <video src="../videos/file.mp4" class="relative w-full h-full object-cover" autoplay muted loop></video>
            </div>

            <!-- Transparent Overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-30"></div>

            <div class="relative z-10 flex justify-center items-center min-h-screen">
                <div class="flex flex-col justify-center items-center text-center">
                    <span class="uppercase font-roboto font-extrabold text-4xl md:text-5xl xl:text-7xl p-4 text-white">Everything is a experience with us</span>
                    <span class="max-w-3xl text-sm leading-loose text-center sm:text-base normal-case text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptatem in recusandae exercitationem. Ducimus sit eaque alias ut quas doloremque adipisci sint non dolores iusto debitis quasi cumque odio quisquam rem optio dolor omnis vero est dolorem quos, accusamus nulla.</span>
                </div>
            </div>
        </section>

        {{-- About Us --}}
        <section class="flex p-4">
            <div class="flex flex-col lg:flex-row w-full justify-center items-center text-center lg:text-left">
                <div class="p-3 flex flex-col w-full lg:w-1/2 justify-center items-center">
                    <div class="p-3">
                        <span class="w-full text-5xl uppercase font-semibold font-roboto text-gray-800">about us</span>
                        <p class="text-sm md:text-base text-center lg:text-left max-w-xl py-4 font-light">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur suscipit exercitationem architecto alias vel, doloribus consequatur iusto dolores excepturi corrupti, itaque quo vitae? Illo sed deleniti molestias voluptas cupiditate inventore impedit quae minima ducimus perspiciatis reprehenderit, quisquam velit laudantium blanditiis beatae. Quas, aperiam? Suscipit amet corrupti eaque delectus? Enim, ea?
                        </p>
                        <p class="text-sm md:text-base text-center lg:text-left max-w-xl font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum blanditiis voluptate alias, magnam molestias dolorum ratione cumque incidunt obcaecati, deserunt quidem. Veritatis perferendis ut, harum aut possimus eius, ducimus cum neque praesentium asperiores labore enim vel eligendi, maxime quia sed.
                        </p>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-5 lg:p-0 flex justify-center items-center">
                    <img src="../images/climb2.jpeg" class="w-full h-full" alt="">
                </div>
            </div>
        </section>

        {{-- Our Guides --}}
        <section class="mt-20">
            <section class="flex justify-center items-center">
                <div class="flex flex-col text-center p-2">
                    <span class="capitalize font-rozha text-4xl sm:text-5xl">Our Guides</span>
                    <span class="text-base pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, possimus!</span>
                </div>
            </section>
            <section class="flex flex-col justify-center items-center mt-5 w-full sm:w-auto mx-0 sm:mx-24 rounded-lg">
                <div class="flex justify-center items-center flex-wrap gap-4 p-5">
                    <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl ">
                        <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                            <img src="../images/selfies/blogger-asian-backpacker-woman-record-vlog-video-top-mountain-young-female-happy-using-mobile-phone-make-vlog-video-enjoy-holidays-hiking-adventure.jpg" class="object-cover w-full h-full" alt="">
                        </div>
                        <div class="p-1 text-center">
                            <span class="font-roboto text-3xl font-bold text-black">Lily</span>
                        </div>
                        <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-200 items-center content-center mt-3">
                            <a href="" class="text-black text-sm">Book Now</a>
                        </div>
                    </div>
                    <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl ">
                        <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                            <img src="../images/selfies/close-up-view-handsome-caucasian-hiker-wearing-snapback-looking-with-happy-smile-while-taking-selfie-with-amazing-landscape-with-waterfall.jpg" class="object-cover w-full h-full" alt="">
                        </div>
                        <div class="p-1 text-center">
                            <span class="font-roboto text-3xl font-bold text-black">Michael</span>
                        </div>
                        <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-200 items-center content-center mt-3">
                            <a href="" class="text-black text-sm">Book Now</a>
                        </div>
                    </div>
                    <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl ">
                        <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                            <img src="../images/selfies/happy-camping-girl-forest-taking-self-photo.jpg" class="object-cover w-full h-full" alt="">
                        </div>
                        <div class="p-1 text-center">
                            <span class="font-roboto text-3xl font-bold text-black">Clara</span>
                        </div>
                        <div class="py-2 px-5 bg-white border border-black rounded-lg hover:bg-gray-200 items-center content-center mt-3">
                            <a href="" class="text-black text-sm">Book Now</a>
                        </div>
                    </div>
                    <div class="flex flex-col transition-transform transform hover:scale-110 justify-center items-center content-center p-10 border border-gray-300 rounded-xl ">
                        <div class="w-40 h-40 rounded-full overflow-hidden m-3 text-center">
                            <img src="../images/selfies/delighted-young-man-trendy-checkered-shirt-spending-time-outdoor-exploring-surroundings-morning.jpg" class="object-cover w-full h-full" alt="">
                        </div>
                        <div class="p-1 text-center">
                            <span class="font-roboto text-3xl font-bold text-black">John</span>
                        </div>
                        <div class="py-2 px-5 bg-white border border-black hover:bg-gray-200 rounded-lg items-center content-center mt-3">
                            <a href="" class="text-black text-sm">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center m-3">
                    <div class="py-2 px-5 border border-black text-black rounded-xl hover:bg-gray-100 items-center content-center mt-3">
                        <a href="" class="text-sm">Show More</a>
                    </div>
                </div>
            </section>
        </section>

    </x-slot>
</x-frontend-layout>

