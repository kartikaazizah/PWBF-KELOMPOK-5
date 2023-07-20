<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_destinasi extends Model
{
    use HasFactory;
    protected $table="kategori_destinasi";
    protected $primaryKey="id_kategori";
    protected $fillable=[
        'nama_kategori'
    ];
}
