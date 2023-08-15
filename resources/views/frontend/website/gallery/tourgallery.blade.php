<x-frontend-layout>
    <x-slot name="content">

        <section class="mt-28">
            <section class="text-gray-600 flex justify-center items-center">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <span class="flex items-center justify-center text-3xl p-5 font-rozha">
                            Image Gallery of {{ $tour->tour_name }}
                        </span>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
                            <div class="grid gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1500" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1200" alt="">
                                </div>
                            </div>
                            <div class="grid gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1500" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1200" alt="">
                                </div>
                            </div>
                            <div class="grid gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1500" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1200" alt="">
                                </div>
                            </div>
                            <div class="grid gap-4">
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1000" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1500" alt="">
                                </div>
                                <div>
                                    <img class="h-auto max-w-full rounded-lg" src="https://dummyimage.com/1200x1200" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </x-slot>
</x-frontend-layout>

