<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambahDataKeluarController extends Controller
{
    public function index() {
        $data = DB::table('arsip as a')
            ->select('a.*', 'b.nomor_klasifikasi','nama_klasifikasi','c.username','d.lemari','e.rak','f.folder')
            ->join('klasifikasi_arsip as b', 'a.id_klasifikasi_arsip', '=', 'b.id_klasifikasi_arsip')
            ->join('users as c', 'a.id_users', '=', 'c.id_users')
            ->join('lemari as d', 'a.id_lemari', '=', 'd.id_lemari')
            ->join('rak as e', 'a.id_rak', '=', 'e.id_rak')
            ->join('folder as f', 'a.id_folder', '=', 'f.id_folder')
            ->get();
        return view('/tambahdatakeluar',[
            'title' => 'Tambah Data',
            'data' => $data
        ]);
    }
    public function create(Request $request)
    {
        $ValidatedData = $request->validate(
            [
                'no_surat' => ['string', 'required'],
                'judul_surat' => ['string', 'max:191', 'required'],
                'indeks_surat' => ['string','required'],
                'tujuan_surat' => ['string', 'max:191', 'required'],
                'tanggal_keluar' => ['string', 'required'],
                'file_surat' => ['mimes:pdf,PDF,DOC,DOCX', 'max:5048', 'required'],
                
            ]
        );
        if($request->file('file_surat')){
            $ValidatedData['file_surat']=$request->file('file_surat')->store('surat-keluar');
        }
        SuratKeluar::create($ValidatedData);
        return redirect()->back()
        ->with('success','Data Berhasil Dimasukan');
    }

}
