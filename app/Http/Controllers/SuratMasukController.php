<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuratMasukController extends Controller
{
    
    public function index() 
    {
        $masuk = DB::table('arsip as a')
            ->select('a.*', 'b.nomor_klasifikasi','nama_klasifikasi','c.username','d.lemari','e.rak','f.folder')
            ->join('klasifikasi_arsip as b', 'a.id_klasifikasi_arsip', '=', 'b.id_klasifikasi_arsip')
            ->join('users as c', 'a.id_users', '=', 'c.id_users')
            ->join('lemari as d', 'a.id_lemari', '=', 'd.id_lemari')
            ->join('rak as e', 'a.id_rak', '=', 'e.id_rak')
            ->join('folder as f', 'a.id_folder', '=', 'f.id_folder')
            ->where('keterangan','=','Surat Masuk')
            ->paginate(5);
        return view('suratmasuk',[
            'title' => 'Surat Masuk',
            'masuk' => $masuk
        ]);
    }

    public function pdf() 
    {
        $masuk = DB::table('arsip as a')
            ->select('a.*', 'b.nomor_klasifikasi','nama_klasifikasi','c.username','d.lemari','e.rak','f.folder')
            ->join('klasifikasi_arsip as b', 'a.id_klasifikasi_arsip', '=', 'b.id_klasifikasi_arsip')
            ->join('users as c', 'a.id_users', '=', 'c.id_users')
            ->join('lemari as d', 'a.id_lemari', '=', 'd.id_lemari')
            ->join('rak as e', 'a.id_rak', '=', 'e.id_rak')
            ->join('folder as f', 'a.id_folder', '=', 'f.id_folder')
            ->where('keterangan','=','Surat Masuk')
            ->paginate(5);
        return view('pdfdatamasuk',[
            'title' => 'Surat Masuk PDF',
            'masuk' => $masuk
        ]);
    }
}
