<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Welcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-12 max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="relative grid grid-cols-12 gap-10 grid-rows-12">
                <section
                    class="col-span-8 overflow-hidden bg-white shadow-sm row-span-12 dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 space-y-4 text-gray-900 dark:text-gray-100">
                        <div class="py-2 font-bold border-b">Recent Notes</div>

                        <div class="grid grid-cols-2 gap-3">
                            @foreach ($notes as $note)
                                <div class="block overflow-hidden bg-gray-100 rounded shadow-sm dark:bg-gray-900/40">
                                    <div class="flex flex-col gap-4 p-6 text-gray-900 dark:text-gray-100">
                                        <div class="flex items-center justify-between gap-2">
                                            <div>
                                                <a class="text-lg font-bold text-blue-900 dark:text-yellow-500"
                                                    href="{{ route('notes.show', $note->id) }}">
                                                    <h3>{{ $note->title }}</h3>
                                                </a>
                                            </div>
                                            <div class="inline-flex">
                                                <a href="{{ route('notes.edit', $note->id) }}"
                                                    class="text-blue-400 transition-all duration-300 ease-in-out hover:text-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('notes.destroy', $note->id) }}"
                                                    class="text-red-400 transition-all duration-300 ease-in-out hover:text-red-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                    </svg>

                                                </a>
                                            </div>


                                        </div>
                                        <div>
                                            {{ Str::limit($note->body, 100) }}
                                        </div>


                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </section>
                <section
                    class="col-span-4 row-span-3 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="py-2 font-bold border-b">Your Usage Stats</div>
                    </div>

                </section>
                <section
                    class="sticky col-span-4 row-span-6 overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg top-6">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="py-2 font-bold border-b">Top Folders</div>
                    </div>
                </section>


            </div>

        </div>
    </div>
</x-app-layout>
