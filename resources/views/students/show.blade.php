<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <style>
            hr{
                border: 1px solid red;
            }
        </style>
<div class="flex justify-center">
    <div class="w-full max-w-sm bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
       
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('students/'.$student->image_url)}}" alt="Bonnie image"/>
           <div class="flex  items-around text-indigo-500">
            <p class="text-gray-900 dark:text-white">First Name:</p> 
            <span><strong>{{ $student->firstName }}</strong><span>
               
           </div>
           <hr>
           <div class="flex  items-around text-indigo-500">
            <h5 class=" text-gray-900 dark:text-white">Middle Name:</h5>
            <span ><strong>{{ $student->middleName }}</strong></span>

           </div>
           <hr>
           <div class="flex  items-around text-indigo-500">
            <h5 class=" text-gray-900 dark:text-white">Last Name:</h5>
            <span ><strong>{{ $student->lastName }}</strong></span>
           
           </div> <hr>
           <div class="flex  items-around text-indigo-500">
            <h5 class=" text-gray-900 dark:text-white">Joined on:</h5>
            <span ><strong>{{ $student->year_joined }}</strong></span>
           
           </div> <hr>
           <div class="flex  items-around text-indigo-500">
            <h5 class=" text-gray-900 dark:text-white">Age:</h5>
            <span ><strong>{{ $student->Age }}</strong></span>
           
           </div> <hr>

           <div class="flex  items-around text-indigo-500">
            <h5 class=" text-gray-900 dark:text-white">Gender:</h5>
            <span ><strong>{{ $student->gender }}</strong></span>
           
           </div> <hr>
           
            <div class="flex mt-4 space-x-3 md:mt-6">
                <a href="{{ route('students.edit',$student->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                <form action="{{ route('students.destroy',$student->id) }}" method="post">
                    @csrf
                    @method('delete')
                <input type="submit" class=" courser-pointer inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-100 bg-red-800 border border-gray-300 rounded-lg hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700" value="Delete"></form>
            </div>
        </div>
    </div>
</div>

    </div>
</x-app-layout>
