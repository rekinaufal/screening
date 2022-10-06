<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\About;


class AboutController
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        $About = About::all();
        $pageTitle = "About";
        return view ('frontend.about', compact('pageTitle', 'About'));
    }

}
