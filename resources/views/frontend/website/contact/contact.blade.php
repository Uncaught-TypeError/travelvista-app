<x-frontend-layout>
    <x-slot name="content">

        {{-- first division --}}
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

        {{-- Contact Form --}}
        <section class="body-font relative text-gray-600">
            <div class="absolute inset-0 bg-gray-300">
                <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.434059705293!2d96.1513908105849!3d16.804809319260162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eca76d77b75f%3A0xf2a90867ee044ef8!2sVista%20Bar!5e0!3m2!1sen!2smm!4v1691429468005!5m2!1sen!2smm" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                </div>
                <div class="container mx-auto flex px-5 py-24">
                    <div class="relative z-10 mt-10 flex w-full flex-col rounded-lg bg-white p-8 shadow-md md:ml-auto md:mt-0 md:w-1/2 lg:w-1/3">
                        <h2 class="title-font mb-1 text-lg font-medium text-gray-900">Contact Us</h2>
                        <p class="mb-5 leading-relaxed text-gray-600">We are available 24/7 for you.</p>
                        <div class="relative mb-4">
                        <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full rounded border border-gray-300 bg-white px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-gray-500 focus:ring-2 focus:ring-gray-200" />
                        </div>
                        <div class="relative mb-4">
                        <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
                        <textarea id="message" name="message" class="h-32 w-full resize-none rounded border border-gray-300 bg-white px-3 py-1 text-base leading-6 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-gray-500 focus:ring-2 focus:ring-gray-200"></textarea>
                        </div>
                        <button class="rounded border-0 bg-gray-500 px-6 py-2 text-lg text-white hover:bg-gray-600 focus:outline-none">Button</button>
                        <p class="mt-3 text-xs text-gray-500 text-center">vista@gmail.com</p>
                    </div>
                </div>
        </section>

    </x-slot>
</x-frontend-layout>
