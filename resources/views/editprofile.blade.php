@extends('layouts.app')

@section('content')

    @include('components.header')
    @include('components.sidebar')
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-40 h-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>                                              
            <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Edit Profile</h3>
        </div>
        <form action="" class="mx-4 my-4">
            <div class="">
                <div class="">
                    <img class="w-32 h-32 sm:m-2 border-4 border-gray-400" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />                                
                    <label class="block mb-2 text-sm font-medium text-gray-900 ml-2 dark:text-gray-300" for="foto_profile">Upload foto</label>
                    <input class="block w-56 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="foto_profile_help" id="foto_profile" type="file">
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2 my-4">
                    <div>
                        <label for="username" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Username</label>
                        <input type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Email</label>
                        <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>  
                </div>
                <button class="inline-flex bg-blue-700 rounded-lg shadow-sm hover:bg-blue-800 text-white font-semibold capitalize px-8 py-2 w-fit">
                    <span>Save</span>
                </button>
            </div>
        </form>
    </div>

@endsection