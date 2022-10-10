<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'categories';
    // Apa saja yang boleh diisi
    protected $fillable = [
        'id',
        'name',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];
}
