<x-frontend-layout>
    <x-slot name="content">

        {{-- Package Booking Step One --}}
        <section class="mt-28">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col justify-center items-center px-10">
                    <form method="POST" action="{{ route('pbookings.store.stepOne') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-3xl font-semibold leading-7 text-gray-900 pb-2 text-center p-5">Booking Step One</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600 text-center p-2">This new booking will be displayed publicly so be careful what you create.</p>

                                <div class="col-span-full mt-10">
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Customer Name</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="" id="name" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 capitalize" value="{{ Auth::user()->name }}" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-full mt-10">
                                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Customer Email</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="email" id="email" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ Auth::user()->email }}" readonly />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-full mt-10">
                                    <label for="destination" class="block text-sm font-medium leading-6 text-gray-900">Destination</label>
                                    <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="destination" id="destination" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Bagan, etc." value="{{ $packageDestination }}" />
                                    </div>
                                    </div>
                                    @error('destination')
                                    <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                                        <a href="{{ route('pbookings.package.index') }}">Cancel</a>
                                    </button>
                                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Next</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </x-slot>
</x-frontend-layout>
