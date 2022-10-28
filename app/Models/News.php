<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'news';
    protected $fillable = [
        'id',
        'text',
        'status',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
