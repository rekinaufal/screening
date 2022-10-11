<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClient extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'our_clients';
    protected $fillable = [
        'id',
        'name',
        'image',
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
}
