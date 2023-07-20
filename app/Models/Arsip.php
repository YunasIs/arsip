<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    public $table = "arsip";
    protected $fillable = [
        'nomor_berkas',
        'tanggal',
        'uraian_berkas',
        'jumlah',
        'keamanan_arsip',
        'uraian_arsip',
        'id_klasifikasi_arsip',
        'id_users',
        'id_lemari',
        'id_rak',
        'id_folder',
        'gambar',
        'keterangan'
    ];
    protected $primaryKey = 'id_arsip';
    public $timestamps = true;
}