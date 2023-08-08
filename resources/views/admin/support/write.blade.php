<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <section class="">
                    @php
                        $senderName = null;

                        foreach ($users as $user) {
                            if ($user->id == $senderId->id) {
                                $senderName = $user->name;
                            }
                        }
                        $tourId = null;

                        foreach ($supports as $support) {
                            if ($support->id == $replies->id){
                                $tourId = $support->tour_id;
                            }
                        }
                    @endphp
                    <div class="flex flex-row items-center justify-evenly border">
                        <div class="p-2 capitalize">Sender ({{ $senderName }})</div>
                        <div class="p-2 capitalize">Receipent ({{ Auth::user()->name }})</div>
                    </div>
                    <div class="border">
                        @foreach ($supports as $support)
                        @if ($support->id == $replies->id)
                            <div class="flex items-center justify-start p-5 pt-5">
                                <span class="pr-3 capitalize">{{ $senderName }} :</span>
                                <span class="rounded-xl border px-2 py-3">{{ $support->message }}</span>
                            </div>
                        @endif
                        @endforeach
                        @foreach ($supports as $support)
                        @if ($support->id == $replies->id)
                        <div class="flex items-center justify-end p-5 pt-5">
                            <span class="rounded-xl border px-2 py-3">{{ $support->reply }}</span>
                            <span class="pl-3 capitalize">: {{ Auth::user()->name }}</span>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="flex">
                        <form class="flex w-full" method="POST" action="{{ route('admin.store.support') }}">
                            @csrf
                            <input type="hidden" name="sender_id" value="{{ $senderId->id }}">
                            <input type="hidden" name="tour_id" value="{{ $tourId }}">
                            <input type="text" id="reply" name="reply" class="w-full items-center rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200" placeholder="Enter Message..." />
                            <button type="submit" class="rounded border-0 bg-blue-600 px-7 text-sm font-bold text-white hover:bg-blue-500 focus:outline-none">Enter</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
</x-admin-layout>

