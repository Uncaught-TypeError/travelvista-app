<x-frontend-layout>
    <x-slot name="content">

        {{-- Tour Booking Step One --}}
        <section class="mt-28">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col justify-center items-center px-10">
                    <form method="POST" action="{{ route('bookings.tour.store.createOne') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <h2 class="text-3xl font-semibold leading-7 text-gray-900 pb-2 text-center p-5">Booking Step One</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600 text-center p-2">These informations are required in order to make a booking.</p>

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
                                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="phone" id="phone" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="09-xxx" value="{{ Auth::user()->profile->phone ?? '' }}" />
                                    </div>
                                </div>
                                @error('phone')
                                <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-span-full mt-10">
                                <label for="destination" class="block text-sm font-medium leading-6 text-gray-900">Destination</label>
                                <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="destination" id="destination" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Bagan, etc." value="{{ $tourDestination }}" />
                                </div>
                                </div>
                                @error('destination')
                                <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-span-full mt-10">
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="address" id="address" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Oak Street, etc." value="{{ Auth::user()->profile->address ?? '' }}" />
                                    </div>
                                </div>
                                @error('address')
                                <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-span-full mt-10">
                                <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                                <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    {{-- min="{{ date('Y-m-d') }}" --}}
                                    <input type="date" name="date" id="date" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ old('date', date('Y-m-d')) }}" min="{{ date('Y-m-d') }}"  />
                                </div>
                                </div>
                                @error('date')
                                <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-span-full mt-10">
                                <label for="num_person" class="block text-sm font-medium leading-6 text-gray-900">Number of Person</label>
                                <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="number" name="num_person" id="num_person" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="1 Person, etc." min="1" max="30" value="{{ old('num_person', $previousData['num_person'] ?? '') }}" />
                                </div>
                                </div>
                                @error('num_person')
                                <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                            <a href="{{ route('bookings.tour.index') }}">Cancel</a>
                        </button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>

    </x-slot>
</x-frontend-layout>
