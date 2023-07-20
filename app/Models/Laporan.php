<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    public $table = "tampil_arsip";
    protected $fillable = [
        'username',
        'nama_daftar',
        'nomor_klasifikasi',
        'nama_klasifikasi',
        'nomor_berkas',
        'tanggal',
        'uraian_berkas',
        'jumlah',
        'lemari',
        'rak',
        'folder',
        'gambar',
        'keterangan'
    ];
}