<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketFoto extends Model
{
    protected $table = 'paket_foto';

    protected $primaryKey = 'id_paket';

    public $incrementing = true;

    protected $fillable = [
        'nama_paket',
        'harga',
        'deskripsi',
        'durasi',
        'gambar',
    ];
}