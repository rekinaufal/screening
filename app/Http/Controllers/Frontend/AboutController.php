<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\About;
use App\Models\Ourteam;
use App\Models\Article;
use DB;

class AboutController
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        // $About = About::all();
        $About = DB::table('about')->first();
        $Ourteam = Ourteam::all();
        $Article = Article::all();
        $Events = DB::table('events')->first();

        $pageTitle = "About";
        return view ('frontend.about', compact('pageTitle', 'About', 'Ourteam', 'Article', 'Events'));
    }

}
