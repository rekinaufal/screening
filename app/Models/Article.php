<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'article';
    // Apa saja yang boleh diisi
    protected $fillable = [
        'id',
        'id_categories',
        'title',
        'description',
        'status',
        'created_by',
        'created_at',
        'updated_by',
        'updated_at',
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

    public function categories()
    {    
        return $this->belongsTo('App\Models\categories', 'id_categories', 'id');
    }

}
