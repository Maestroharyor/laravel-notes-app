<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                My Blog Posts
            </h2>
            <a href="{{ route('notes.create') }}"
                class="inline-flex px-4 py-2 text-sm font-medium text-white rounded-lg bg-brand-red hover:bg-red-700 focus:ring-4 focus:ring-purple-300 lg:px-5 lg:py-3">Add
                new post</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div
            class="p-6 mx-auto space-y-12 overflow-hidden text-gray-900 bg-white shadow-sm  max-w-7xl sm:px-6 lg:px-8 dark:bg-gray-800 sm:rounded-lg dark:text-gray-10">


            <div class="overflow-x-auto">
                <table class="min-w-full text-sm bg-white divide-y-2 divide-gray-200">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Name</th>
                            <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Tags</th>
                            <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Role</th>
                            <th class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Salary</th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">John Doe</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">24/05/1995</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">Web Developer</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">$120,000</td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <a href="#"
                                    class="inline-block px-4 py-2 text-xs font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                                    View
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Jane Doe</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">04/11/1980</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">Web Designer</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">$100,000</td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <a href="#"
                                    class="inline-block px-4 py-2 text-xs font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                                    View
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">Gary Barlow</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">24/05/1995</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">Singer</td>
                            <td class="px-4 py-2 text-gray-700 whitespace-nowrap">$20,000</td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <a href="#"
                                    class="inline-block px-4 py-2 text-xs font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700">
                                    View
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        {{-- <div class="grid grid-cols-1 gap-8 mx-auto max-w-7xl sm:px-6 lg:px-8 md:grid-cols-2">

        </div> --}}
    </div>
</x-app-layout>
