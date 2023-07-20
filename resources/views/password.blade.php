@extends('layouts.app')

@section('content')

    @include('components.header')

    @include('components.sidebar')

    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

        <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-52 h-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="m-1.5 mr-1 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>                              
            <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Change Password</h3>
        </div>

        <form action="" class="mx-4 my-4">
            <div>
                <div class="mb-2">
                    <label for="password_lama" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Current Password</label>
                    <input type="text" id="password_lama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-6/12 p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-2">
                    <label for="password_baru" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">New Password</label>
                    <input type="text" id="password_baru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-6/12 p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-2">
                    <label for="password_baru" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Repeat New Password</label>
                    <input type="text" id="password_baru" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-6/12 p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>
            <button class="inline-flex bg-blue-700 rounded-lg shadow-sm hover:bg-blue-800 text-white font-semibold capitalize my-4 px-8 py-2 w-fit">
                <span>Save</span>
            </button>
        </form>
            
                
    </div>

@endsection