<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\Models\Jobs;
use DB;

class CompanyController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        $Company = Company::all();
        $Article = DB::table('article')->limit(5)->get();
        $Events = DB::table('events')->first();

        return view ('frontend.company', compact('Company', 'Events', 'Article'));
    }

    public function detail ($id)
    {
        $id = decrypt($id);
        $Company = Company::find($id);
        $Article = DB::table('article')->limit(5)->get();
        $Events = DB::table('events')->first();
        $Jobs = Jobs::where("id_company", $id)->get();
        return view ('frontend.detailCompany', compact("Company", "Jobs", 'Events', 'Article'));
    }
}
