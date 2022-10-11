<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\About;
use App\Models\OurClient;

class HomeController
{
    public static $pageTitle = 'Home';
    
    public function index ()
    {
        $OurClient = OurClient::all();
        $pageTitle = "Home";
        return view ('frontend.home', compact('pageTitle', 'OurClient'));
    }

}
