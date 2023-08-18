<x-frontend-layout>
    <x-slot name="content">

        {{-- Package Booking Step Two --}}
        <section class="mt-28">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900 pb-2 text-center p-5">Booking Step Two</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600 text-center p-2">Choose your desire package from the same destination.</p>
                    <section class="body-font text-gray-600">
                        <div class="container mx-auto px-5 py-10">
                            <div class="flex flex-wrap">
                                @foreach ($packages as $package)
                                    <div class="p-4 lg:w-1/3">
                                        <div class="relative h-full overflow-hidden rounded-lg bg-gray-100 bg-opacity-75 px-8 pb-10 pt-16 text-center hover:bg-gray-200">
                                            <h2 class="title-font mb-1 text-xs font-medium tracking-widest text-gray-400">{{ $package->destination }}</h2>
                                            <h1 class="title-font mb-3 text-xl font-medium text-gray-900 sm:text-2xl">{{ $package->package_name }}</h1>
                                            <div class="flex justify-center items-center text-center gap-3 mb-3">
                                                <span>Price:</span>
                                                <p class="leading-relaxed">{{ $package->price }}</p>
                                            </div>
                                            <div class="flex justify-center items-center text-center gap-3 mb-3">
                                                <span>Person:</span>
                                                <p class="leading-relaxed">{{ $package->num_person }}</p>
                                            </div>
                                            <div class="flex justify-center items-center text-center gap-3 mb-3">
                                                <span>Date:</span>
                                                <p class="leading-relaxed">{{ \Carbon\Carbon::parse($package->date)->format('M d, Y') }}</p>
                                            </div>
                                            <p class="mb-3 leading-relaxed">{{ $package->description }}</p>
                                            <form method="POST" action="{{ route('pbookings.store.stepTwo') }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                                <input type="hidden" name="package_id" value="{{ $package->id }}">
                                                <button type="submit" class="inline-flex items-center text-indigo-500">Buy Now</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
        </section>

    </x-slot>
</x-frontend-layout>
