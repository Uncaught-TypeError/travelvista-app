<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12">
                    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                        <div class="m-2 flex p-2">
                            <a href="{{ route('admin.packages.index') }}" class="py-2 text-indigo-500 hover:text-indigo-700">Back</a>
                        </div>
                        <div class="m-2 p-2">
                            <form method="POST" action="{{ route('admin.packages.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2 class="text-2xl font-semibold leading-7 text-gray-900 pb-2">New Package</h2>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">This new package will be displayed publicly so be careful what you create.</p>

                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-4">
                                        <label for="package_name" class="block text-sm font-medium leading-6 text-gray-900">Package Name</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="text" name="package_name" id="package_name" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Auora, etc." value="{{ old('package_name', $previousPackage['package_name'] ?? '') }}" />
                                            </div>
                                        </div>
                                        @error('package_name')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="destination" class="block text-sm font-medium leading-6 text-gray-900">Package Destination</label>
                                        <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="text" name="destination" id="destination" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Bagan, etc." value="{{ old('destination', $previousPackage['destination'] ?? '') }}" />
                                        </div>
                                        </div>
                                        @error('destination')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="duration" class="block text-sm font-medium leading-6 text-gray-900">Package Duration (Days)</label>
                                        <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="number" name="duration" id="duration" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ old('duration', $previousPackage['duration'] ?? '') }}" placeholder="1 Day, etc." min="1" max="30" />
                                        </div>
                                        </div>
                                        @error('duration')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                                        <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            {{-- min="{{ date('Y-m-d') }}" --}}
                                            <input type="date" name="date" id="date" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ date('Y-m-d') }}" />
                                        </div>
                                        </div>
                                        @error('date')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                                        <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="number" step="0.01" name="price" id="price" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="0.99, etc." value="{{ old('price', $previousPackage['price'] ?? '') }}" />
                                        </div>
                                        </div>
                                        @error('price')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="num_person" class="block text-sm font-medium leading-6 text-gray-900">Number of Person</label>
                                        <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <input type="number" name="num_person" id="num_person" autocomplete="off" class="block flex-1 border-0 bg-transparent py-1.5 pl-2 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="1 Person, etc." min="1" max="30" value="{{ old('num_person', $previousPackage['num_person'] ?? '') }}" />
                                        </div>
                                        </div>
                                        @error('num_person')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Package Description</label>
                                        <div class="mt-2">
                                        <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 pl-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="About the package...">{{ old('description', $previousPackage['description'] ?? '') }}</textarea>
                                        </div>
                                        <p class="mt-3 text-sm leading-6 text-gray-600">Write about the package.</p>
                                        @error('description')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-span-full mt-10">
                                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Package Images</label>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                        <div class="text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="image" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="image" name="image" onchange="loadFile(event)" type="file" value="{{ old('image', $previousPackage['image'] ?? '') }}" class="sr-only" />
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                        </div>
                                        <p class="mt-3 text-sm leading-6 text-gray-600">The uploaded images won't appear here.</p>
                                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                            <img id="preview_img" src="" class="h-full object-cover border-2 border-gray-300" alt="Package photo">
                                        </div>
                                        @error('image')
                                        <div class="mt-1 text-sm text-red-400">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                                    <a href="{{ route('admin.packages.create') }}">Cancel</a>
                                </button>
                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>

<script>
    var loadFile = function(event) {

        var input = event.target;
        var file = input.files[0];
        var type = file.type;

       var output = document.getElementById('preview_img');


        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
