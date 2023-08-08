<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="body-font overflow-hidden text-gray-600">
                    <div class="container mx-auto px-5 py-24">
                        <div class="mb-12 flex w-full flex-col text-center">
                            <h1 class="title-font mb-4 text-2xl font-medium text-gray-900 sm:text-3xl">Your Messages</h1>
                        </div>
                        {{-- {{ Auth::user()->id }} --}}
                        @php
                            $messageCount = 1;
                        @endphp
                        @foreach ($supports as $support)
                        @php
                            $senderName = null;
                            $senderId = null;
                            foreach ($users as $user) {
                                if ($support->sender_id == $user->id) {
                                    $senderName = $user->name;
                                    $senderId = $user->id;
                                }
                            }
                        @endphp
                        {{-- @foreach ($users as $user) --}}
                            <div class="-my-8 divide-y-2 divide-gray-100 border p-3 rounded-lg">
                                <div class="flex flex-wrap py-8 md:flex-nowrap">
                                    <div class="mb-6 flex flex-shrink-0 flex-col md:mb-0 md:w-64">
                                        <span class="title-font font-semibold text-gray-700">Message {{ $messageCount }}</span>
                                        <span class="mt-1 text-sm text-gray-500">{{ $support->created_at }}</span>
                                    </div>
                                    <div class="md:flex-grow">
                                        <h2 class="title-font mb-2 text-2xl font-medium text-gray-900">Message from {{ $senderName }}</h2>
                                        {{-- @if (empty($support->message)) --}}
                                        <p class="mb-4 leading-relaxed">{{ $support->message }}</p>
                                        {{-- @else --}}
                                        {{-- <p class="mb-4 leading-relaxed">{{ $support->reply }}</p> --}}
                                        {{-- @endif --}}

                                    </div>
                                    <div class="flex flex-col justify-end items-center mr-4">
                                        {{-- <div class="flex"> --}}
                                            <a href="{{ route('admin.write.support', ['replies' => $support->id, 'senderId' => $senderId]) }}" class="flex">
                                                <span class="pr-1">Reply</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z" />
                                                </svg>
                                            </a>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                            @php
                                $messageCount++;
                            @endphp
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
</x-admin-layout>

