<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use pdf;

class EditDataMasukController extends Controller
{
    public function index($id) {

        $masuk = SuratMasuk::find($id);
        return view('editdatamasuk',[
            'title' => 'Edit Data',
            'masuk' => $masuk
        ]);
        
    }

    public function post(Request $request)
    {
        $id = $request->id;
        $ValidatedData = $request->validate([
            'no_surat' => 'required',
            'judul_surat' => 'required',
            'indeks_surat' => 'required',
            'asal_surat' => 'required',
            'tanggal_masuk' => 'required',
            'file_surat' => 'required|mimes:pdf, doc, docx|max:5048'
        ]);
        if($request->file('file_surat'))
        {
            $ValidatedData['file_surat'] = $request->file('file_surat')->store('surat-masuk');
        }
       SuratMasuk::where('id','=',$id)
       ->update($ValidatedData);
        return redirect()->back()
        ->with('success','Data Berhasil Diubah');
    }

    public function hapus($id)
    {
        
       $masuk = SuratMasuk::find($id);
       $masuk->delete();

        return redirect()->back()
        ->with('success','Data Berhasil Dihapus');
    }

    public function pdf()
    {
        $surat = SuratMasuk::get();
        $data = [
            'title' => 'Laporan data Masuk',
            'tanggal' => date('m/d/y'),
            'surat' => $surat
        ];
        $pdf1 = Barryvdh\DomPDF\Facade\Pdf::class;
        $pdf = $pdf1::loadview('laporan-masuk', compact($data));
        return $pdf->download('laporan-data-masuk.pdf');
    }
}
