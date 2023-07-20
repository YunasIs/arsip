<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditDataKeluarController extends Controller
{
    public function index() {
        return view('/editdatakeluar',[
            'title' => 'Edit Data'
        ]);
    }
}
