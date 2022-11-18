<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\News;
use App\Models\OurClient;
use App\Models\Banner;
use App\Models\Events;
use App\Models\Article;
use DB;

class HomeController
{
    public static $pageTitle = 'Home';
    
    public function index ()
    {
        $Banner = Banner::all();
        foreach ($Banner as $key => $value) {
            $image[] = $value->image; 
        }
        // dd($image[0]);
        $News = News::all();
        $OurClient = OurClient::all();        
        $Article = DB::table('article')->limit(5)->get();
        $Events = DB::table('events')->first();
        $pageTitle = "Home";
        return view ('frontend.home', compact('pageTitle', 'OurClient', 'News', 'Banner', 'image', 'Events', 'Article'));
    }

}
