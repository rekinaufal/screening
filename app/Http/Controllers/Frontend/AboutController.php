<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\About;
use App\Models\Ourteam;
use DB;

class AboutController
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        // $About = About::all();
        $About = DB::table('about')->first();
        $Ourteam = Ourteam::all();

        $pageTitle = "About";
        return view ('frontend.about', compact('pageTitle', 'About', 'Ourteam'));
    }

}
