<x-frontend-layout>
    <x-slot name="content">

        <section class="mt-28">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12">
                    <div class="flex flex-col items-center justify-center">
                        <form method="POST" action="{{ route('reviews.package.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="px-5">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2 class="text-2xl font-semibold leading-7 text-gray-900 pb-2 text-center">New Review</h2>
                                    <p class="mt-1 text-sm leading-6 text-gray-600 text-center">This new review will be displayed publicly so be careful what you create.</p>

                                    <div class="col-span-full mt-10">
                                        <label for="user_id" class="block text-sm font-medium leading-6 text-gray-900">User Name</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <input type="text" name="user_id" id="user_id" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 capitalize" value="{{ Auth::user()->name }}" readonly />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a rating</label>
                                        <select id="rating" name="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 ">
                                            <option value="">No Rating</option>
                                            <option value="5">Outstanding</option>
                                            <option value="4">Good</option>
                                            <option value="3">Normal</option>
                                            <option value="2">Bad</option>
                                            <option value="1">Worst</option>
                                        </select>
                                        @error('rating')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="package_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Package Name</label>
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="text" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 capitalize" value="{{ $package_name }}" readonly />
                                            <input type="text" name="package_id" id="package_id" autocomplete="off" class="" value="{{ $package_id }}" hidden />
                                        </div>
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="comment" class="block text-sm font-medium leading-6 text-gray-900">package Comment</label>
                                        <div class="mt-2">
                                        <textarea id="comment" name="comment" rows="3" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="About the package..."></textarea>
                                        </div>
                                        <p class="mt-3 text-sm leading-6 text-gray-600">Comment about the package.</p>
                                        @error('comment')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mt-6 flex items-center justify-center sm:justify-end gap-x-6">
                                        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                                            <a href="{{ route('userbookings.index') }}">Cancel</a>
                                        </button>
                                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if ($errors->any())
                            <div class="text-red-500">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

    </x-slot>
</x-frontend-layout>
