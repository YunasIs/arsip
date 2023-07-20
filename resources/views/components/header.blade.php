 <!-- Header -->
<div class="fixed w-full flex items-center justify-between h-14 text-black z-10 dark:text-white">
  <div class="flex items-center pl-4 justify-start md:justify-center w-14 md:w-64 h-14 bg-grey-100 dark:bg-gray-800 border-none">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
      <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
      <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
    </svg>    
    <span class="hidden md:block  tracking-wider text-lg  font-semibold ml-1">Digital Arsip</span>
  </div>
  <div class="flex justify-between items-center h-14 bg-grey-100 dark:bg-gray-800 header-right ">
    <div class="bg-white rounded items-center sm:w-72 md:w-64 lg:w-full max-w-sm shadow-sm w-32  ml-4">
      <input type="search" name="" id="" placeholder="Search" class="relative w-32 sm:w-72 md:w-64 lg:w-full pl-3 text-sm text-black outline-none border-2 border-gray-300 focus:outline-none bg-white" />
      <button class="cari outline-none focus:outline-none absolute bg-blue-700 p-2 py-2 rounded-r-full">
        <svg class="w-5 text-white h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
      </button>
    </div>
    <ul class="flex items-center">
      <li>
        <button
          aria-hidden="true"
          @click="toggleTheme"
          class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-700 hover:bg-gray-100 dark:bg-gray-50 dark:hover:bg-blue-700 text-gray-900 focus:outline-none"
        >
          <svg
            x-show="isDark"
            width="24"
            height="24"
            class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-900 dark:group-focus:text-gray-700"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke=""
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
            />
          </svg>
          <svg
            x-show="!isDark"
            width="24"
            height="24"
            class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke=""
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
            />
          </svg>
        </button>
      </li>
      <li>
        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
      </li>
      <li>
        <a href="/profile">
          <div class="flex items-center justify-start md:justify-center mr-2 md:mr-8 md:h-14 bg-grey-100 dark:bg-gray-800 border-none font-semibold font-sans">
            <img class="w-10 h-10 md:w-10 md:h-10 mr-2 rounded-full" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
            <span class="hidden md:block">{{Auth::user()->username}}</span>
          </div>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- ./Header -->