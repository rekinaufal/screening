<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\About;
use App\Models\Ourteam;


class ServiceEBCController
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        $About = About::all();
        $Ourteam = Ourteam::all();

        $pageTitle = "About";
        return view ('frontend.serviceEBC', compact('pageTitle', 'About', 'Ourteam'));
    }

}
