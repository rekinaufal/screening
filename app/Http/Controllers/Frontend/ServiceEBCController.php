<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\About;
use App\Models\Ourteam;
use DB;


class ServiceEBCController
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        $Service = DB::table('service')
        ->where('category', 'EBC')
        ->first();
        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $Events = DB::table('events')->first();
        $ServiceDetails = DB::table('service_details')
        ->where('category', 'EBC')
        ->get();
        $pageTitle = "About";
        return view ('frontend.serviceEBC', compact('pageTitle', 'Service', 'Article', 'Events', 'ServiceDetails'));
    }

}
