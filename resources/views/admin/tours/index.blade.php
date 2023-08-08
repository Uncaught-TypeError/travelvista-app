<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <div class="w-full sm:px-6">
                        <div class="px-4 py-4 md:px-10 md:py-7">
                            <div class="flex items-center justify-between">
                                <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-xl lg:text-2xl">Tours</p>
                                {{-- <div class="flex cursor-pointer items-center rounded px-4 py-3 text-sm font-medium leading-none text-gray-600">
                                    <p class="pr-2">Sort:</p>
                                    <select id="countries" class="w-full rounded-lg border border-gray-300 bg-gray-50 p-1 text-sm text-gray-900">
                                        <option value="US">Select</option>
                                        <option value="US">Price</option>
                                        <option value="CA">Location</option>
                                        <option value="FR">Duration</option>
                                    </select>
                                </div> --}}
                            </div>
                        </div>
                        <div class="bg-white px-4 py-4 md:px-8 md:py-7 xl:px-10">
                            <div class="items-center justify-between sm:flex">
                                <div class="flex items-center">
                                    <a class="rounded-full focus:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-800" href="javascript:void(0)" id="all-tours-button">
                                        <div class="rounded-full px-8 py-2 text-blue-700">
                                            <p>All</p>
                                        </div>
                                    </a>
                                    <a id="available-tours-button" class="ml-4 rounded-full focus:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-800 sm:ml-8" href="javascript:void(0)">
                                        <div class="rounded-full px-8 py-2 text-gray-600 hover:bg-blue-100 hover:text-blue-700">
                                            <p>Available</p>
                                        </div>
                                    </a>
                                    <a id="unavailable-tours-button" class="ml-4 rounded-full focus:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-800 sm:ml-8" href="javascript:void(0)">
                                        <div class="rounded-full px-8 py-2 text-gray-600 hover:bg-blue-100 hover:text-blue-700">
                                            <p>Unavailable</p>
                                        </div>
                                    </a>
                                </div>
                                <a onclick="popuphandler(true)" href="{{ route('admin.tours.create') }}" class="mt-4 inline-flex items-start justify-start rounded bg-blue-500 px-6 py-3 hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 sm:mt-0">
                                    <p class="text-sm font-medium leading-none text-white">Add Tour</p>
                                </a>
                            </div>
                            <div class="mt-7 overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <tbody>
                                        @foreach ($tours as $tour)
                                            <tr tabindex="0" class="h-16 rounded border border-gray-100 focus:outline-none">
                                            <td>
                                                <div class="ml-5">
                                                    <div class="relative flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-sm bg-gray-200">
                                                        <input placeholder="checkbox" type="checkbox" class="checkbox absolute h-full w-full cursor-pointer opacity-0 focus:opacity-100" />
                                                        <div class="check-icon hidden rounded-sm bg-blue-700 text-white">
                                                            <svg class="icon icon-tabler icon-tabler-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                                <path d="M5 12l5 5l10 -10"></path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                <div class="flex items-center pl-5">
                                                    <p class="mr-2 text-base font-medium leading-none text-gray-700">{{ $tour->tour_name }}</p>
                                                    <a href="{{ asset('storage/pdfs/your_pdf_file.pdf') }}" download>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hover:text-blue-700 text-blue-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="pl-24">
                                                <div class="flex items-center">
                                                    <a href="{{ route('admin.tours.desMap', $tour->id) }}" class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="text-gray-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                                        </svg>
                                                        <p class="ml-2 text-sm leading-none text-gray-600">{{ $tour->destination }}</p>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="pl-5">
                                                <div class="flex items-center">
                                                    <a href="{{ route('admin.tours.viewImage', $tour->id) }}" class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                            <path d="M12.5 5.83339L7.08333 11.2501C6.75181 11.5816 6.56556 12.0312 6.56556 12.5001C6.56556 12.9689 6.75181 13.4185 7.08333 13.7501C7.41485 14.0816 7.86449 14.2678 8.33333 14.2678C8.80217 14.2678 9.25181 14.0816 9.58333 13.7501L15 8.33339C15.663 7.67034 16.0355 6.77107 16.0355 5.83339C16.0355 4.8957 15.663 3.99643 15 3.33339C14.337 2.67034 13.4377 2.29785 12.5 2.29785C11.5623 2.29785 10.663 2.67034 10 3.33339L4.58333 8.75005C3.58877 9.74461 3.03003 11.0935 3.03003 12.5001C3.03003 13.9066 3.58877 15.2555 4.58333 16.2501C5.57789 17.2446 6.92681 17.8034 8.33333 17.8034C9.73985 17.8034 11.0888 17.2446 12.0833 16.2501L17.5 10.8334" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        <p class="ml-2 text-sm leading-none text-gray-600">Images</p>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="pl-5">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="text-gray-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                                    </svg>
                                                    <p class="ml-2 text-sm leading-none text-gray-600">{{ $tour->duration }} Days</p>
                                                </div>
                                            </td>
                                            <td class="pl-5">
                                                <div class="flex items-center">
                                                    <a href="{{ route('admin.read.support', $tour->id) }}" class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="20" height="20" class="text-gray-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                                        </svg>
                                                        <p class="ml-2 text-sm leading-none text-gray-600">Support</p>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="pl-5">
                                                @php
                                                    $hasBooking = false;
                                                    // foreach ($tours as $tour) {
                                                        foreach ($bookings as $booking) {
                                                        if ($booking->tour_id == $tour->id) {
                                                            $hasBooking = true;
                                                            break;
                                                        }
                                                    }
                                                    // }
                                                @endphp
                                                @if ($hasBooking)
                                                    <button class="rounded bg-red-100 px-3 py-3 text-sm leading-none text-red-700 focus:outline-none">Unavailable</button>
                                                @else
                                                    <button class="rounded bg-green-100 px-3 py-3 text-sm leading-none text-green-700 focus:outline-none">Available</button>
                                                @endif
                                            </td>
                                            <td class="pl-4">
                                                <a href="{{ route('admin.tours.show', $tour->id) }}" class="rounded bg-gray-100 px-5 py-3 text-sm leading-none text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2">View</a>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center justify-between gap-2">
                                                    <a href="{{ route('admin.tours.edit', $tour->id) }}" class="rounded bg-blue-100 px-5 py-3 text-sm leading-none text-blue-600 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2">Edit</a>
                                                    <form action="{{ route('admin.tours.destroy', $tour->id) }}" method="POST" enctype="multipart/form-data" onsubmit="return confirm('Are you sure?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="rounded bg-red-100 px-5 py-3 text-sm leading-none text-red-600 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-300 focus:ring-offset-2" type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="py-5">
            Contents
        </div> --}}
    </x-slot>

</x-admin-layout>
