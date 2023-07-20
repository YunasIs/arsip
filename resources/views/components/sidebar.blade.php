  <!-- Sidebar -->
  <div class="barside fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-700 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar rounded-tr-3xl">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
      <ul class="flex flex-col py-4 space-y-1">
        <li class="px-5 hidden md:block">
          <div class="flex flex-row items-center h-8">
            <div class="text-sm font-light tracking-wide text-white uppercase">Main</div>
          </div>
        </li>
        <li>
          <a href="{{ route('dashboard') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-blue-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
          </a>
        </li>
        <li>
            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-blue-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <span class="inline-flex justify-center items-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Document</span>
                <svg sidebar-toggle-item class="w-6 h-6 ml-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>    
            </a>
            <ul id="dropdown-example" class="hidden bg-blue-800 dark:bg-gray-800">
              <li>
                <a href="{{ route('suratmasuk') }}"
                  class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-blue-500 dark:hover:bg-blue-700 dark:text-white pl-12">Surat Masuk</a>
              </li>
              <li>
                <a href="{{ route('suratkeluar') }}"
                  class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-blue-500 dark:hover:bg-blue-700 dark:text-white pl-12">Surat Keluar</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-blue-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6" aria-controls="report" data-collapse-toggle="report">
                <span class="inline-flex justify-center items-center ml-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>                            
                  </span>
                <span class="ml-2 text-sm tracking-wide truncate">Report</span>
                <svg sidebar-toggle-item class="w-6 h-6 ml-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>    
            </a>
            <ul id="report" class="hidden bg-blue-800 dark:bg-gray-800">
              <li>
                <a href="{{ route('reportmasuk') }}"
                  class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-blue-500 dark:hover:bg-blue-700 dark:text-white pl-12"> Report Surat Masuk</a>
              </li>
              <li>
                <a href="{{ route('reportkeluar') }}"
                  class="flex items-center p-2 text-sm font-normal text-white-600 transition duration-75 group hover:bg-blue-500 dark:hover:bg-blue-700 dark:text-white pl-12">Report Surat Keluar</a>
              </li>
            </ul>
          </li>
        <li class="px-5 hidden md:block">
          <div class="flex flex-row items-center mt-5 h-8">
            <div class="text-sm font-light tracking-wide text-white uppercase">Settings</div>
          </div>
        </li>
        <li>
          <a href="/logout" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-500 dark:hover:bg-blue-700 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>              
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Log Out</span>
          </a>
        </li>
      </ul>
      <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Yunas @2023</p>
    </div>
  </div>
  <!-- ./Sidebar -->