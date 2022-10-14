<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'jobfair';
    protected $fillable = [
        'id_jobfair',
        'id_company',
        'division',
        'position',
        'location',
        'job_description',
        'recuirement',
        'experience_level',
        'job_type',
        'year_of_experience',
        'qualification_degree',
        'sallary',
        'status',
        'highlight',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by',
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

    public function company()
    {    
        return $this->belongsTo('App\Models\Company', 'id_company', 'id');
    }
}
