<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'service';
    // Apa saja yang boleh diisi
    protected $fillable = [
        'id',
        'category',
        'title_1',
        'description_1',
        'title_2',
        'description_2'
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

}
