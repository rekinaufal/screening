<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'events';
    protected $fillable = [
        'id',
        'text',
        'is_main',
        'status',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
