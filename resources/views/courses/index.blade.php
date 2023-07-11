<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-5">
           {{---table---}}
           <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="p-4 bg-white dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1 ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for courses">
                </div>
                <div class=" flex justify-end">
                   
                    <a href="{{route("courses.create")}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add New course</a>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                           CourseId
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name                            
                       </th>
                       <th scope="col" class="px-6 py-3">
                          Credit
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Grade
                        </th>
                       
                        <th scope="col" class="px-6 py-3 "style="color:blue; font-weight:bold;">
                           <strong> Action</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($courses as  $course)
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                       
                       
                    <td class="px-6 py-4">
                    {{$course->courseId}}
                    </td>
                    <td class="px-6 py-4">
                        {{$course->name}}
                    </td>
                    <td class="px-6 py-4">
                       {{$course->credit}}
                     </td>
                     <td>
                     {{$course->grade}}
                     </td>
                   
                    <td class="px-6 py-4 flex items-between">
                    <form action="{{route("courses.destroy",$course->id)}}" method="post">
                    @csrf
                    @method('delete')
                        <input type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" value="Delete"></form>
                         <a href="{{route("courses.edit",$course->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                    </td>
                    

                </tr>
                     
                  @endforeach
                  
                </tbody>
            </table>
        </div>
           {{--table end--}}
        </div>
    </div>
</x-app-layout>
