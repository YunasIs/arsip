<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function pdfkeluar() {
        $suratmasuk = DB::table('arsip as a')
        ->select('a.*', 'b.nomor_klasifikasi','nama_klasifikasi','c.username','d.lemari','e.rak','f.folder')
        ->join('klasifikasi_arsip as b', 'a.id_klasifikasi_arsip', '=', 'b.id_klasifikasi_arsip')
        ->join('users as c', 'a.id_users', '=', 'c.id_users')
        ->join('lemari as d', 'a.id_lemari', '=', 'd.id_lemari')
        ->join('rak as e', 'a.id_rak', '=', 'e.id_rak')
        ->join('folder as f', 'a.id_folder', '=', 'f.id_folder')
        ->where('keterangan','=','Surat Keluar')
        ->get();
        $pdfsuratkeluar = PDF::loadView('pdfdatakeluar', compact('suratkeluar'))->setPaper('a4', 'portrait');
        return $pdfsuratkeluar->stream('Laporan Data Keluar' .'.pdf');
    }

    public function pdfmasuk() {
        $suratmasuk = DB::table('arsip as a')
        ->select('a.*', 'b.nomor_klasifikasi','nama_klasifikasi','c.username','d.lemari','e.rak','f.folder')
        ->join('klasifikasi_arsip as b', 'a.id_klasifikasi_arsip', '=', 'b.id_klasifikasi_arsip')
        ->join('users as c', 'a.id_users', '=', 'c.id_users')
        ->join('lemari as d', 'a.id_lemari', '=', 'd.id_lemari')
        ->join('rak as e', 'a.id_rak', '=', 'e.id_rak')
        ->join('folder as f', 'a.id_folder', '=', 'f.id_folder')
        ->where('keterangan','=','Surat Masuk')
        ->get();
        $pdfsuratmasuk = PDF::loadView('pdfdatamasuk', compact('suratmasuk'))->setPaper('a4', 'portrait');
        return $pdfsuratmasuk->stream('Laporan Data Masuk' .'.pdf');
    }
}
