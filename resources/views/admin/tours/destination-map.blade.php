<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                <div class="p-5">
                    <a href="{{ route('admin.tours.index') }}" class="bg-gray-400 rounded-lg py-2 px-5 hover:bg-gray-500 font-bold text-white">Back</a>
                </div>
                <span class="flex items-center justify-center text-2xl p-5">
                    {{ $tour->destination }}
                </span>
                <section class="body-font relative text-gray-600">
                    <div class="container mx-auto flex flex-wrap py-5 sm:flex-nowrap">
                      <div class="relative flex h-[500px] w-full items-end justify-start overflow-hidden rounded-lg bg-gray-300 p-5">
                        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q={{ urlencode($tour->destination) }}&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                        <div class="relative flex flex-wrap rounded bg-white py-6 shadow-md">
                          <div class="px-6 lg:w-1/2">
                            <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Description</h2>
                            <p class="mt-1 truncated">{{ $tour->description }}</p>
                          </div>
                          <div class="mt-4 px-6 lg:mt-0 lg:w-1/2">
                            <h2 class="title-font text-xs font-semibold tracking-widest text-gray-900">Tour Name</h2>
                            <a href="{{ route('admin.tours.show', $tour->id) }}" class="leading-relaxed font-semibold">{{ $tour->tour_name }}</a>
                            <h2 class="title-font mt-4 text-xs font-semibold tracking-widest text-gray-900">Like it?</h2>
                            <a href="{{ route('admin.bookings.createOne') }}" class="leading-relaxed text-indigo-500">Book Now!</a>
                          </div>
                        </div>
                      </div>
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
    <script src="{{ mix('node_modules/flowbite/dist/flowbite.min.js') }}"></script>
</x-admin-layout>
