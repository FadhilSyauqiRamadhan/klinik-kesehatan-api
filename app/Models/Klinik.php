<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    protected $fillable = [
        'nama_klinik',
        'alamat_lengkap',
        'nomor_telepon',
        'jenis_klinik',
        'latitude',
        'longitude'
    ];
}
