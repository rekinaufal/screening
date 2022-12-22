<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\About;
use App\Models\Ourteam;
use DB;

class ServiceTSController
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        $Service = DB::table('service')
                    ->where('category', 'TS')
                    ->first();
        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $Events = DB::table('events')->first();

        $pageTitle = "About";
        return view ('frontend.serviceTS', compact('pageTitle', 'Service', 'Article', 'Events'));
    }

}
