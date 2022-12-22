<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'service_details';
    // Apa saja yang boleh diisi
    protected $fillable = [
        'id',
        'category',
        'title',
        'description',
        'image',
        'created_by'
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

}
