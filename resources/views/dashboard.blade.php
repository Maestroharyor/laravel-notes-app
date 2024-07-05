<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Welcome {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="pb-12">
        <div class="mx-auto space-y-12 max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between p-6 mt-12 overflow-hidden text-gray-900 bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg dark:text-gray-100"
                x-show="showSnippetBar" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90">
                <div class="">
                    Random Quote of the day Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
                <button class="transition-all duration-300 ease-in-out hover:text-gray-500"
                    @click="showSnippetBar = false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </button>
            </div>

            <div class="relative grid grid-cols-1 gap-10 md:grid-cols-12 md:grid-rows-9">
                <section
                    class="col-span-1 row-span-1 overflow-hidden bg-white shadow-sm md:col-span-12 lg:col-span-8 md:row-span-12 dark:bg-gray-800 sm:rounded-lg">
                    <div class="p-6 space-y-4 text-gray-900 dark:text-gray-100">
                        <div class="py-2 font-bold border-b">Recent Notes</div>

                        <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
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
                    class="col-span-1 row-span-1 overflow-hidden bg-white shadow-sm md:row-span-2 md:col-span-6 lg:col-span-4 dark:bg-gray-800 sm:rounded-lg">
                    <div class="flex flex-col gap-5 p-6 text-gray-900 dark:text-gray-100">
                        <div class="py-2 font-bold border-b">Your Usage Stats</div>
                        <div class="card">
                            <div class="px-4 -mt-2 divide-y divide-gray-200 card-body">
                                <div class="flex items-center justify-between py-3 text-sm">
                                    <div class="flex items-center space-x-2 text-gray-700 dark:text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                        </svg>

                                        <span>Total Notes</span>
                                    </div>
                                    <span class="font-mono text-gray-900 dark:text-white">132</span>
                                </div>
                                <div class="flex items-center justify-between py-3 text-sm">
                                    <div class="flex items-center space-x-2 text-gray-700 dark:text-gray-300"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                        </svg>

                                        <span>Total Folders</span>
                                    </div>
                                    <span class="font-mono text-gray-900 dark:text-white">32,422</span>
                                </div>
                                <div class="flex items-center justify-between py-3 text-sm">
                                    <div class="flex items-center space-x-2 text-gray-700 dark:text-gray-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>

                                        <span>Posts Created</span>
                                    </div>
                                    <span class="font-mono text-gray-900 dark:text-white ">0</span>
                                </div>
                                {{-- <div class="flex items-center justify-between py-3 text-sm">
                                    <div class="flex items-center space-x-2 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="flex-none w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Completed</span>
                                    </div>
                                    <span class="font-mono text-green-800 bg-green-200 badge">12</span>
                                </div>
                                <div class="flex items-center justify-between py-3 text-sm">
                                    <div class="flex items-center space-x-2 text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            class="flex-none w-5 h-5">
                                            <path fill-rule="evenodd"
                                                d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Closed</span>
                                    </div>
                                    <span class="font-mono text-red-700 bg-red-200 badge">32</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </section>
                <section
                    class="sticky col-span-1 row-span-1 overflow-hidden bg-white shadow-sm md:row-span-4 md:col-span-6 lg:col-span-4 dark:bg-gray-800 sm:rounded-lg top-8 h-fit">
                    <div class="p-6 space-y-5 text-gray-900 dark:text-gray-100">
                        <div class="py-2 font-bold border-b">Top Folders</div>
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-1">
                            @for ($i = 1; $i <= 6; $i++)
                                <div
                                    class="flex items-center gap-3 px-3 py-2 lg:py-3.5 overflow-hidden bg-gray-100 rounded shadow-sm dark:bg-gray-900/40">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                    </svg>
                                    <p>Folder {{ $i }}</p>
                                </div>
                            @endfor
                        </div>

                    </div>


                </section>


            </div>

        </div>
    </div>
</x-app-layout>
