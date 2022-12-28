<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'message';
    protected $fillable = [
        'id',
        'full_name',
        'email',
        'job_title',
        'company_name',
        'message',
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
