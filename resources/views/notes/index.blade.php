<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                My Notes
            </h2>
            <a href="{{ route('notes.create') }}"
                class="text-sm text-white bg-blue-500 hover:bg-blue-700 font-medium rounded-lg px-5 py-2.5 text-center transition-all duration-300 ease-in-out">Create
                new note</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($notes as $note)
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border-b-4 border-gray-300 dark:border-gray-700 hover:-translate-y-2 transition duration-300 block">
                    <div class="p-6 text-gray-900 dark:text-gray-100  flex flex-col gap-4">
                        <div class="flex  justify-between items-center gap-2">
                            <div>
                                <a class="font-bold text-yellow-500 text-lg"
                                    href="{{ route('notes.show', $note->id) }}">
                                    <h3>{{ $note->title }}</h3>
                                </a>
                            </div>
                            <div class="inline-flex">
                                <a href="{{ route('notes.edit', $note->id) }}"
                                    class=" text-blue-400 hover:text-blue-500 transition-all duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                                <a href="{{ route('notes.destroy', $note->id) }}"
                                    class=" text-red-400 hover:text-red-500 transition-all duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>

                                </a>
                            </div>


                        </div>
                        <div>
                            {{ Str::limit($note->body, 100) }}
                        </div>

                        <div>
                            <a href="{{ route('notes.show', $note->id) }}"
                                class="text-blue-400 hover:text-blue-500 transition-all duration-300 ease-in-out"> See
                                note
                                details...</a>
                        </div>

                    </div>
                </div>
            @endforeach



        </div>
    </div>
</x-app-layout>
