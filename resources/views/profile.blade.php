@extends('layouts.app')

@section('content')
    <!--Profile-->
    
         @include('components.header') 
      
          @include('components.sidebar')
        
          <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

            <!-- Client Table -->
            <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-40 h-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                  </svg>                  
                <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Profile</h3>
            </div>
            <div class="mt-4 mx-4">
              <div class="w-full overflow-hidden rounded-lg shadow-lg dark:bg-gray-900 bg-blue-700">
                <div class="bagianprofile w-full md:h-60 h-92 overflow-x-auto">
                    <div class="relative m-2 p-2 text-left">
                        
                        <div class="sm:flex items-center sm:justify-start bg-grey-100 border-none">                            
                              <img class="w-32 h-32 sm:m-2 mx-auto sm:mx-0 rounded-full" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />                            
                            <ul class="text-center sm:text-left text-white sm:mx-2 bg-red">
                                <li class="my-4 uppercase font-semibold text-s sm:text-md">Junferty Sabriani Sianturi</li>
                                <li class="my-4 uppercase font-semibold">Admin</li>
                                <li class="my-4 ">junfertysipalingcantik@gmail.com</li>
                            </ul>
                        </div>
                        <div class="flex items-center">
                            <div class="m-2 mx-auto sm:mx-0">
                                <a href="{{ route('editprofile') }}">
                                  <button class="justify-center inline-flex bg-blue-500 hover:bg-white hover:text-gray-900 dark:bg-gray-100 text-white active:text-white active:bg-blue-800 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 w-full sm:w-32" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 pt-0.5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    <span class="py-1">Edit Profile</span>
                                  </button>
                                </a>
                                <button class="justify-center inline-flex bg-blue-500 hover:bg-white hover:text-gray-900 dark:bg-gray-100 text-white active:text-white active:bg-blue-800 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 w-full sm:w-44" type="button">                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 pt-0.5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                    </svg>                                    
                                    <span class="py-1">Change Password</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- ./Client Table -->
        </div>
      <!--/Profile-->
@endsection