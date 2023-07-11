<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
         
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white p-5">
           {{-- max-w --}}
           @include('includes.breadcrumb')
           <form  action="{{route('teachers.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
            {{-- first name --}}
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                    <input type="text" id="firstname" name="firstName"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    @error('firstName')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                {{-- lastName --}}
                <div>
                    <label for="middlename" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Midle name</label>
                    <input type="text"   name="middleName"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  >
                    @error('middleName')
                    <span>{{ $message }}</span>
                @enderror
                </div>
                {{-- lastName --}}
                <div>
                    <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                    <input type="text"  name="lastName"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    @error('lastName')
                    <span>{{ $message }}</span>
                @enderror
                </div>  
                {{-- -phone --}}
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" >
                </div>
                {{-- -imagep; --}}
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Teachers Image</label>
                    <input class="block w-full text-sm text-gray-50 border border-blue-500 rounded-lg cursor-pointer bg-green-800 dark:text-gray-400 focus:outline-none dark:bg-gray-200 dark:border-indigo-800 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                </div>
                
                <div>
                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teacher Id</label>
                    <input type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" >
                </div>
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email address</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="john.doe@company.com" >
            </div> 
            
          <div class="flex justify-center">
             <input type="submit" class="flex justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Add Teacher">
         </div>
        </form>
            
          
  {{-- max- end --}}
        </div>
    </div>
</x-app-layout>
