<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="m-2 flex p-2">
                            <a href="{{ route('admin.packagebookings.stepOne') }}" class="py-2 text-indigo-500 hover:text-indigo-700">Back</a>
                        </div>
                        <div class="m-2 p-2">

                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2 class="text-2xl font-semibold leading-7 text-gray-900 pb-2">Booking Step Two</h2>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">This new booking will be displayed publicly so be careful what you create.</p>
                                </div>

                        </div>
                        <section class="body-font text-gray-600">
                            <div class="container mx-auto px-5 py-10">
                                <div class="-m-4 flex flex-wrap">
                                    @foreach ($packages as $package)
                                        <div class="p-4 lg:w-1/3">
                                            <div class="relative h-full overflow-hidden rounded-lg bg-gray-100 bg-opacity-75 px-8 pb-10 pt-16 text-center hover:bg-gray-200">
                                                <h2 class="title-font mb-1 text-xs font-medium tracking-widest text-gray-400">{{ $package->destination }}</h2>
                                                <h1 class="title-font mb-3 text-xl font-medium text-gray-900 sm:text-2xl">{{ $package->package_name }}</h1>
                                                <div class="flex justify-center gap-3">
                                                    <span>Price:</span>
                                                    <p class="mb-3 leading-relaxed">{{ $package->price }}</p>
                                                </div>
                                                <div class="flex justify-center gap-3">
                                                    <span>Person:</span>
                                                    <p class="mb-3 leading-relaxed">{{ $package->num_person }}</p>
                                                </div>
                                                <div class="flex justify-center gap-3">
                                                    <span>Date:</span>
                                                    <p class="mb-3 leading-relaxed">{{ \Carbon\Carbon::parse($package->date)->format('M d, Y') }}</p>
                                                </div>
                                                <p class="mb-3 leading-relaxed">{{ $package->description }}</p>
                                                <form method="POST" action="{{ route('admin.packagebookings.store.stepTwo') }}" enctype="multipart/form-data" onsubmit="return confirm('Are you sure?')">
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
                </div>
            </div>
        </div>
    </x-slot>

</x-admin-layout>
