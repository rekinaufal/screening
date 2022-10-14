<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applied extends Model
{
    static $rules = [
    ];
    
    use HasFactory;
    
    Protected $table = 'applied';
    // Apa saja yang boleh diisi
    protected $fillable = [
        'id_applied',
        'id_jobfair',
        'id_user',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function user()
    {    
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
    public function jobfair()
    {    
        return $this->belongsTo('App\Models\Jobfair', 'id_jobfair', 'id_jobfair');
    }
    // Protected $primaryKey = 'id';


    //apa saja yang tidak boleh diisi
    // protected $guarded = ['id'];

}
