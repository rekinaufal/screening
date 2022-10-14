<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'talent';
    protected $fillable = [
        'id',
        'nama_lengkap',
        'foto_diri',
        'nama_panggilan',
        'no_identitas',
        'file_identitas',
        'tempat_lahir',
        'tgl_lahir',
        'no_hp',
        'status_pernikahan',
        'jenis_kelamin',
        'agama',
        'provinsi',
        'kota_kabupaten',
        'file_cv',
        'tanggal_daftar',
        'status',
        'ig',
        'linkin',
        'twiter',
        'tiktok',
        'id_user',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
}
