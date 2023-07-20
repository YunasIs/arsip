<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;

class SuratKeluarController extends Controller
{
    public function index() {
        $keluar = SuratKeluar::get();
        return view('suratkeluar',[
            'title' => 'Surat Masuk',
            'keluar' => $keluar
        ]);
    }
}
