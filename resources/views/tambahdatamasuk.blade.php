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
        <form action="{{route('/createdatamasuk')}}" method="POST" enctype="multipart/form-data" class="mx-4 my-4">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="no_berkas" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Nomor Berkas</label>
                    <input type="text" name="no_berkas" id="no_berkas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="tanggal" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="uraian_berkas" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Uraian Berkas</label>
                    <input type="text" name="uraian_berkas" id="uraian_berkas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="jumlah" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>                
                <div>
                    <label for="keamanan_arsip" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Keamanan Arsip</label>
                    <select id="keamanan_arsip" name="keamanan_arsip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Keamanan Arsip</option>
                        <option value="asli">Asli</option>
                        <option value="tidak asli">Tidak Asli</option>
                    </select> 
                </div>
                <div>
                    <label for="uraian_arsip" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Uraian Arsip</label>
                    <input type="text" name="uraian_arsip" id="uraian_arsip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="id_klasifikasi_arsip" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">ID Klasifikasi Arsip</label>
                    <select id="id_klasifikasi_arsip" name="id_klasifikasi_arsip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">ID Klasifikasi Arsip</option>
                    @foreach($data as $dt)
                    <option value="{{$dt->id_klasifikasi_arsip}}">{{$dt->id_klasifikasi_arsip}}</option>
                    @endforeach
                    </select> 
                </div>
                <div>
                    <label for="id_users" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">ID User</label>
                    <input type="text" name="id_users" id="id_users" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="{{Auth::user()->id_users}}">
                </div>
                <div >
                    <label for="id_lemari" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">ID Lemari</label>
                    <select id="id_lemari" name="id_lemari" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">ID Lemari</option>
                    @foreach($lemari as $dt)
                    <option value="{{$dt->id_lemari}}">{{$dt->id_lemari}}</option>
                    @endforeach
                    </select> 
                </div>
                <div>
                    <label for="id_rak" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">ID RAK</label>
                    <select id="id_rak" name="id_rak" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">ID RAK</option>
                    @foreach($rak as $dt)
                    <option value="{{$dt->id_rak}}">{{$dt->id_rak}}</option>
                    @endforeach
                    </select> 
                </div>
                <div>
                    <label for="id_folder" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">ID Folder</label>
                    <select id="id_folder" name="id_folder" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">ID Folder</option>
                    @foreach($folder as $dt)
                    <option value="{{$dt->id_folder}}">{{$dt->id_folder}}</option>
                    @endforeach
                    </select> 
                </div>
                <div>
                    <label for="gambar" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div>
                    <label for="keterangan" class="block mb-2 text-sm font-semibold capitalize text-gray-900 dark:text-gray-300">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>
            <button type="SUBMIT" class="inline-flex bg-blue-700 rounded-lg shadow-sm hover:bg-blue-800 text-white font-semibold capitalize px-8 py-2 w-fit">SAVE</button>
        </form>
    </div>

@endsection