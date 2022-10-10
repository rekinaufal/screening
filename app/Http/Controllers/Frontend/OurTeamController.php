<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Ourteam;

class OurTeamController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        $Ourteam = Ourteam::all();
        $pageTitle = self::$pageTitle;
        
        return view ('frontend.ourTeam', compact('pageTitle', 'Ourteam'));
    }

}
