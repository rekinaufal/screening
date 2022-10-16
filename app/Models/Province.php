<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'provinces';
}
