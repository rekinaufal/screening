<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\News;
use App\Models\OurClient;

class HomeController
{
    public static $pageTitle = 'Home';
    
    public function index ()
    {
        $News = News::all();
        $OurClient = OurClient::all();
        $pageTitle = "Home";
        return view ('frontend.home', compact('pageTitle', 'OurClient', 'News'));
    }

}
