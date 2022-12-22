<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mempelai;
use App\Models\Pria;
use App\Models\Wanita;
use App\Models\TempatAcara;
use DB;

class ContactUsController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $Events = DB::table('events')->first();

        return view ('frontend.contact', compact ('Events', 'Article'));
    }

}
