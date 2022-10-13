<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'company';
    protected $fillable = [
        'id',
        'nama_perusahaan',
        'provinsi',
        'kota_kabupaten',
        'kelurahan',
        'desa',
        'alamat',
        'nomor_telpon',
        'email',
        'website_perusahaan',
        'logo',
        'nama_pimpinan',
        'deskripsi_perusahaan',
        'bisnis',
        'id_user',
        // 'created_at',
        // 'updated_at',
        // 'created_by',
        // 'updated_by',
    ];

    // public function user()
    // {    
    //     return $this->belongsTo('App\Models\User', 'created_by', 'id');
    // }
}
