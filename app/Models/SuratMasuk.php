<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;
    public $table = "surat_masuk";
    protected $fillable = [
        'no_surat',
        'judul_surat',
        'indeks_surat',
        'asal_surat',
        'tanggal_masuk',
        'file_surat',
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
}