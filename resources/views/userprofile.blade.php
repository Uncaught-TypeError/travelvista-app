<x-app-layout>
    {{-- UserProfile --}}
    <div class="bg-no-repeat bg-cover md:h-[300px]" style="background-image: @isset($userProfile->bgimage) url('{{ Storage::url($userProfile->bgimage) }}') @endisset;">
        <div class="p-16">
            <div class="mt-24 p-8 shadow bg-white">
                <div class="grid grid-cols-1 md:grid-cols-3">
                    <div class="order-last mt-20 grid grid-cols-3 text-center md:order-first md:mt-0">
                    <div>
                        <p class="text-xl font-bold text-gray-700">{{ $tourBeenCount }}</p>
                        <p class="text-gray-400">Tours Been</p>
                    </div>
                    <div>
                        <p class="text-xl font-bold text-gray-700">{{ $packagesBeenCount }}</p>
                        <p class="text-gray-400">Packages Bought</p>
                    </div>
                    <div>
                        <p class="text-xl font-bold text-gray-700">{{ $totalReviews }}</p>
                        <p class="text-gray-400">Reviews</p>
                    </div>
                    </div>
                    <div class="relative">
                    <div class="absolute inset-x-0 top-0 mx-auto -mt-24 flex h-48 w-48 items-center justify-center rounded-full bg-indigo-100 text-indigo-500 shadow-2xl">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg> --}}
                        <img id="preview_img" class="h-full w-full rounded-full object-cover border-2 border-gray-300" src="{{ $userProfile && $userProfile->image ? Storage::url($userProfile->image) : 'https://dummyimage.com/150x100' }}" alt="Current profile photo" />
                    </div>
                    </div>
                    <div class="mt-32 flex justify-between space-x-8 md:mt-0 md:justify-center">
                        <button class="transform rounded bg-blue-400 px-4 py-2 font-medium uppercase text-white shadow transition hover:-translate-y-0.5 hover:bg-blue-500 hover:shadow-lg">Contact</button>
                        <button class="transform rounded bg-gray-700 px-4 py-2 font-medium uppercase text-white shadow transition hover:-translate-y-0.5 hover:bg-gray-800 hover:shadow-lg">Message</button>
                    </div>
                </div>
                <div class="mt-20 border-b pb-12 text-center">
                    <h1 class="text-4xl font-medium text-gray-700">{{ Auth::user()->name }}, <span class="font-light text-gray-500">
                        @if ($userProfile && $userProfile->age)
                            {{ $userProfile->age }}
                        @else
                            <a href="{{ route('userProfile.edit') }}" class="underline text-indigo-600 hover:text-indigo-400">Age?</a>
                        @endif
                    </span></h1>
                    <p class="mt-3 font-light text-gray-600">
                        @if ($userProfile && $userProfile->city)
                            {{ $userProfile->city }},
                        @else
                            <a href="{{ route('userProfile.edit') }}" class="underline text-indigo-600 hover:text-indigo-400">City?</a>,
                        @endif
                        @if ($userProfile && $userProfile->country)
                            {{ $userProfile->country }}
                        @else
                            <a href="{{ route('userProfile.edit') }}" class="underline text-indigo-600 hover:text-indigo-400">Country?</a>
                        @endif
                    </p>
                    <p class="mt-8 text-gray-500">
                        @if ($userProfile && $userProfile->occupation)
                            {{ $userProfile->occupation }}
                        @else
                            <a href="{{ route('userProfile.edit') }}" class="underline text-indigo-600 hover:text-indigo-400">Occupation?</a>
                        @endif
                    </p>
                    <p class="mt-2 text-gray-500">
                        @if ($userProfile && $userProfile->address)
                            {{ $userProfile->address }}
                        @else
                            <a href="{{ route('userProfile.edit') }}" class="underline text-indigo-600 hover:text-indigo-400">Address?</a>
                        @endif
                    </p>
                </div>
                <div class="mt-12 flex flex-col justify-center">
                    <p class="text-center font-light text-gray-600 lg:px-16">
                        @if ($userProfile && $userProfile->description)
                            {{ $userProfile->description }}
                        @else
                            <a href="{{ route('userProfile.edit') }}" class="underline text-indigo-600 hover:text-indigo-400">Bio?</a>
                        @endif
                    </p>
                    {{-- <button class="mt-4 px-4 py-2 font-medium text-indigo-500 hover:text-indigo-400">Show more</button> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

