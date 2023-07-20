<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinasi extends Model
{
    use HasFactory;
    protected $table="destinasi";
    protected $primaryKey="id_destinasi";
    protected $fillable=[
        'nama_destinasi',
        'alamat_destinasi',
        'harga_destinasi'
    ];
}
