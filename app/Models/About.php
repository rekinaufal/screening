<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'about';
    protected $fillable = [
        'id',
        'title',
        'image',
        'description',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }
}
