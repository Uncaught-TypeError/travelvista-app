<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8 flex justify-center">
                <div class="max-w-xl">
                    <header class="mb-3 flex flex-col items-center justify-center">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Profile Picture') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Update your profile's picture.") }}
                        </p>
                    </header>
                    <div class="flex flex-col items-center space-x-6">
                        <div class="shrink-0 p-2">
                            @if ($userProfile)
                                <img id="preview_img" class="h-[10rem] w-[10rem] rounded-full object-cover border-2 border-gray-300" src="{{ Storage::url($userProfile->image) ?? 'https://dummyimage.com/150x100' }}" alt="Current profile photo" />
                            @else
                                <!-- Display a default image or message when $userProfile is null -->
                                <img id="preview_img" class="h-[10rem] w-[10rem] rounded-full object-cover border-2 border-gray-300" src="https://dummyimage.com/150x100" alt="Default profile photo" />
                            @endif
                        </div>
                        <div class="p-2">
                            <form method="post" action="{{ route('userProfile.update2') }}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                                <label class="block rounded-full border-2 border-gray-200" for="image">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" id="image" name="image" onchange="loadFile(event)" class="block w-full border-gray-500 text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-gray-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-gray-700 hover:file:bg-gray-200" />
                                </label>
                                <div class="flex justify-end p-4 text-sm gap-3">
                                    <button type="submit" class="uppercase">Save</button>
                                    <button type="button" class="uppercase">
                                        <a href="{{ route('userProfile.edit') }}">Cancel</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8 flex flex-col justify-start">
                <div class="max-w-xl">
                    <header class="mb-3">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Background Image') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Update your profile's background image.") }}
                        </p>
                    </header>
                    <div class="flex flex-col justify-start">
                        <div class="shrink-0 p-2">
                            @if ($userProfile)
                                <img id="preview_img2" class="h-[10rem] w-[15rem] object-cover border-2 border-gray-300" src="{{ Storage::url($userProfile->bgimage) ?? 'https://dummyimage.com/150x100' }}" alt="Current bg photo" />
                            @else
                                <!-- Display a default image or message when $userProfile is null -->
                                <img id="preview_img2" class="h-[10rem] w-[15rem] object-cover border-2 border-gray-300" src="https://dummyimage.com/150x100" alt="Current bg photo" />
                            @endif
                        </div>
                        <div class="p-2 w-[25rem]">
                            <form method="post" action="{{ route('userProfile.update3') }}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>
                                <label class="block rounded-full border-2 border-gray-200" for="bgimage">
                                    <span class="sr-only">Choose profile photo</span>
                                    <input type="file" id="bgimage" name="bgimage" onchange="loadFile2(event)" class="block w-full border-gray-500 text-sm text-slate-500 file:mr-4 file:rounded-full file:border-0 file:bg-gray-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-gray-700 hover:file:bg-gray-200" />
                                </label>
                                <div class="flex justify-end p-4 text-sm gap-3">
                                    <button type="submit" class="uppercase">Save</button>
                                    <button type="button" class="uppercase">
                                        <a href="{{ route('userProfile.edit') }}">Cancel</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Optional Information') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __("Update your profile's address, phone, .etc.") }}
                            </p>
                        </header>
                        <form method="post" action="{{ route('userProfile.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <input type="text" name="user_id" value="{{ Auth::user()->id }}" hidden>

                            <div>
                                <x-input-label for="phone" :value="__('Phone')" />
                                <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" value="{{ $userProfile->phone ?? '' }}" autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                            </div>

                            <div>
                                <x-input-label for="age" :value="__('Age')" />
                                <x-text-input id="age" name="age" type="number" class="mt-1 block w-full" value="{{ $userProfile->age ?? '' }}" min="18" />
                                <x-input-error class="mt-2" :messages="$errors->get('age')" />
                            </div>

                            <div>
                                <x-input-label for="city" :value="__('City')" />
                                <x-text-input id="city" name="city" value="{{ $userProfile->city ?? '' }}" type="text" class="mt-1 block w-full" autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('city')" />
                            </div>

                            <div>
                                <x-input-label for="country" :value="__('Country')" />
                                <x-text-input id="country" name="country" value="{{ $userProfile->country ?? '' }}" type="text" class="mt-1 block w-full" autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('country')" />
                            </div>

                            <div>
                                <x-input-label for="occupation" :value="__('Occupation')" />
                                <x-text-input id="occupation" name="occupation" value="{{ $userProfile->occupation ?? '' }}" type="text" class="mt-1 block w-full" autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('occupation')" />
                            </div>

                            <div>
                                <x-input-label for="address" :value="__('Address')" />
                                <x-text-input id="address" name="address" value="{{ $userProfile->address ?? '' }}" type="text" class="mt-1 block w-full" autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Bio')" />
                                <textarea id="description" name="description" cols="30" rows="4" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" autofocus>{{ $userProfile->description ?? '' }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

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

<script>
    var loadFile2 = function(event) {

        var input = event.target;
        var file = input.files[0];
        var type = file.type;

       var output2 = document.getElementById('preview_img2');


        output2.src = URL.createObjectURL(event.target.files[0]);
        output2.onload = function() {
            URL.revokeObjectURL(output2.src) // free memory
        }
    };
</script>
