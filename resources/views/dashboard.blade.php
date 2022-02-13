<x-app-layout>


    <div class="py-2">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="">
                <!-- component -->
             <div class="py-8 w-full ">
                 <div class="shadow overflow-hidden rounded">
                 <table class="min-w-full dark:text-gray-400">
                     <thead class="dark:bg-gray-600 bg-gray-800 text-white">
                     <tr>
                         <th style="width:10%" class="text-left py-3 px-4 uppercase font-semibold text-sm">SL No.</th>
                         <th style="width:15%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Author</td>
                         <th style="width:40%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                         <th style="width:20%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Published At</th>
                         <th style="width:15%" class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                     </tr>
                     </thead>
                 <tbody class="text-gray-700 dark:text-gray-200 dark:bg-gray-800">
                     @foreach (App\Models\Post::all() as $post)
                         <tr>
                             <td class="text-left py-3 px-4">{{ $loop->index + 1 }}</td>
                             <td class="text-left py-3 px-4">Author</td>
                             <td class="text-left py-3 px-4">{{ $post->title }}</td>
                             <td class="text-left py-3 px-4">{{ date('d F, Y',strtotime($post->created_at)) }}</td>
                             <td class="text-left py-3 px-4 space-x-2">
                                 <a class="text-yellow-700 hover:text-yellow-500 transition" title="Edit" href=""><i class="fas fa-edit"></i></a>
                                 <a class="text-teal-600 hover:text-teal-400 transition" title="Publish" href=""><i class="fas fa-upload"></i></a>
                                 <a class="text-red-500 hover:text-red-400 transition" title="Delete" href=""><i class="far fa-trash-alt"></i></a>
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
</x-app-layout>
