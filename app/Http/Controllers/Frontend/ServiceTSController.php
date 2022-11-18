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
        $About = About::all();
        $Ourteam = Ourteam::all();
        $Article = DB::table('article')->limit(5)->get();
        $Events = DB::table('events')->first();

        $pageTitle = "About";
        return view ('frontend.serviceTS', compact('pageTitle', 'About', 'Ourteam', 'Events', 'Article'));
    }

}
