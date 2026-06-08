<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $primaryKey = 'id_booking';

    protected $fillable = [

        'id_user',
        'id_paket',
        'tanggal_booking',
        'lokasi',
        'status'

    ];

    public function paket()
    {
        return $this->belongsTo(
            PaketFoto::class,
            'id_paket',
            'id_paket'
        );
    }

    public function user()
    {
        return $this->belongsTo(
            User::class,
            'id_user',
            'id_user'
        );
    }
}