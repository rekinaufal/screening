<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'banner';
    protected $fillable = [
        'id',
        'image',
        'text',
        'status',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
