<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showroom extends Model
{
    use HasFactory;
    public $table = "showroom_fauziah";
    protected $fillable = [
        'nama_mobil',
        'pemilik_mobil',
        'merk_mobil',
        'tanggal_beli',
        'deskripsi',
        'foto_mobil',
        'status_pembayaran',
    ];
}
