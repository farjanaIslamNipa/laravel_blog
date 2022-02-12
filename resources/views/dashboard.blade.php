<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                   <!-- component -->
                <div class="py-8 w-full">
                    <div class="shadow overflow-hidden rounded">
                    <table class="min-w-full bg-white dark:bg-gray-700 dark:text-gray-400">
                        <thead class="dark:bg-gray-500 bg-gray-800 text-white">
                        <tr>
                            <th style="width:5%" class="text-left py-3 px-4 uppercase font-semibold text-sm">SL No.</th>
                            <th style="width:20%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Author</td>
                            <th style="width:45%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                            <th style="width:15%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Published At</th>
                            <th style="width:15%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                        </tr>
                        </thead>
                    <tbody class="text-gray-700 dark:text-gray-200">
                        <tr>
                        <td class="text-left py-3 px-4">Lian</td>
                        <td class="text-left py-3 px-4">Smith</td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500">622322662</a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500">jonsmith@mail.com</a></td>
                        <td class="text-left py-3 px-4">
                            <a href=""><i class="fal fa-edit"></i></a>
                            <a href="">Publish</a>
                            <a href="">Delete</a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
