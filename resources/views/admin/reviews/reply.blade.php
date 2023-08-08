<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-2 flex p-2">
                    <a href="{{ route('admin.reviews.manage') }}" class="py-2 text-indigo-500 hover:text-indigo-700">Back</a>
                </div>
                <section class="">
                    <div class="flex flex-row items-center justify-evenly border">
                        <div class="p-2 capitalize">Sender ({{ $reviews->user->name }})</div>
                        <div class="p-2 capitalize">Receipent ({{ Auth::user()->name }})</div>
                    </div>
                    <div class="border">
                        <div class="flex items-center justify-start p-5 pt-5">
                            <span class="pr-3 capitalize">{{ $reviews->user->name }} :</span>
                            <span class="rounded-xl border px-2 py-3">
                                @if ($reviews->comment)
                                    {{ $reviews->comment }}
                                @else
                                    <p class="text-gray-500 normal-case">No comments from this user.</p>
                                @endif
                            </span>
                        </div>
                        <div class="flex items-center justify-end p-5 pt-5">
                            <span class="rounded-xl border px-2 py-3">
                                @php
                                    $finalReply = null;
                                    foreach ($replies as $reply) {
                                        if ($reply->review_id == $reviews->id) {
                                            $finalReply = $reply->reply;
                                            break;
                                        }
                                    }
                                @endphp
                                @if ($finalReply)
                                    {{ $finalReply }}
                                @else
                                    <p class="text-gray-500 normal-case">No comments from this user.</p>
                                @endif
                            </span>
                            <span class="pl-3 capitalize">: {{ Auth::user()->name }}</span>
                        </div>
                    </div>
                    <div class="flex">
                        <form class="flex w-full" method="POST" action="{{ route('admin.reviews.submitReply') }}">
                            @csrf
                            <input type="hidden" name="review_id" value="{{ $reviews->id }}">
                            <input type="hidden" name="preview_id" value="">
                            {{-- @foreach ($replies as $reply) --}}
                                @if (!$finalReply)
                                    <input type="text" id="reply" name="reply" class="w-full items-center rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200" placeholder="Enter Message..." />
                                    <button type="submit" class="rounded border-0 bg-blue-600 px-7 text-sm font-bold text-white hover:bg-blue-500 focus:outline-none">Reply</button>
                                @else
                                    <input type="text" id="reply" name="reply" class="w-full items-center rounded border border-gray-300 bg-gray-100 bg-opacity-50 px-3 py-1 text-base leading-8 text-gray-700 outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 cursor-not-allowed" placeholder="Enter Message..." disabled />
                                    <button type="submit" class="rounded border-0 bg-gray-600 px-7 text-sm font-bold text-white focus:outline-none cursor-not-allowed" disabled>Reply</button>
                                @endif
                            {{-- @endforeach --}}
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </x-slot>
</x-admin-layout>

