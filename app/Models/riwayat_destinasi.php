<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_destinasi extends Model
{
    use HasFactory;
    protected $table="riwayat_destinasi";
    protected $primary_Key="id_histori";
    protected $fillable=[
        'tanggak_kunjungan'
    ];
}
