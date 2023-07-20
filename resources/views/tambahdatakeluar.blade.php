@extends('layouts.app')

@section('content')

    @include('components.header')
    @include('components.sidebar')
    <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="inline-flex md:col-span-2 xl:col-span-3 mt-4 mx-4 pl-4 rounded-lg shadow-lg border-b-4 border-blue-600 bg-blue-500 dark:bg-gray-800 dark:border-gray-600 text-white w-44 h-10">                 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 m-1.5 mr-1 ml-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>              
            <h3 class="py-2 mx-2 px-0.5 text-sm font-medium tracking-wider capitalize">Tambah Data</h3>
        </div>
        <form action="/createdatakeluar" method="POST" enctype="multipart/form-data" class="mx-4 my-4">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="no_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Nomor Surat</label>
                    <input type="text" name="no_surat" id="no_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="judul_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Judul Surat</label>
                    <input type="text" name="judul_surat" id="judul_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="indeks_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Indeks Surat</label>
                    <input type="text" name="indeks_surat" id="indeks_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="tujuan_surat" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Asal Surat</label>
                    <input type="text" name="tujuan_surat" id="tujuan_surat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>                
                <div class="relative">
                    <label for="tanggal_keluar" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Tanggal Keluar</label>
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pt-6 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-900 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input" placeholder="Select date" id="tanggal_keluar" name="tanggal_keluar">
                </div>
                <div>                    
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_surat">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="pdf_masuk_help" id="file_surat" name="file_surat" type="file">
                </div>
                <button class="inline-flex bg-blue-700 rounded-lg shadow-sm hover:bg-blue-800 text-white font-semibold capitalize px-8 py-2 w-fit">
                    <span>Save</span>
                </button>
            </div>
        </form>
    </div>

@endsection