<?php

namespace App\Http\Controllers;
use App\Models\Arsip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambahDataMasukController extends Controller
{
    public function index() {
        $data = DB::table('klasifikasi_arsip as a')
            ->select('a.*')
            ->get();
            $lemari = DB::table('lemari as a')
            ->select('a.*')
            ->get();
            $rak = DB::table('rak as a')
            ->select('a.*')
            ->get();
            $folder = DB::table('folder as a')
            ->select('a.*')
            ->get();
        return view('/tambahdatamasuk',[
            'title' => 'Tambah Data',
            'data' => $data,
            'lemari' => $lemari,
            'rak' => $rak,
            'folder' => $folder
        ]);
    }
    public function create(Request $request)
    {
        $ValidatedData = $request->validate(
            [
                'nomor_berkas' => ['string', 'required'],
                'tanggal' => ['required'],
                'uraian_berkas' => ['string', 'max:191', 'required'],
                'jumlah' => ['string','required'],
                'keamanan_arsip' => ['string', 'max:191', 'required'],
                'uraian_arsip' => ['string', 'required'],
                'id_klasifikasi_arsip' => ['required'],
                'id_users' => ['required'],
                'id_lemari' => ['required'],
                'id_rak' => ['required'],
                'id_folder' => ['required'],
                'gambar' => ['mimes:jpg,jpeg,png,JPG,JPEG,PNG','max:10000','required'],
                'keterangan' => ['required'],
            ]
        );
        if($request->file('gambar')){
            $ValidatedData['gambar']=$request->file('gambar_surat')->store('surat-masuk');
        }
        
        dd($ValidatedData);
    }
}
