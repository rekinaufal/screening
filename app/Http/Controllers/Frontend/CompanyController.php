<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;

class CompanyController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        $Company = Company::all();
        return view ('frontend.company', compact('Company'));
    }

    public function detail ($id)
    {
        $id = decrypt($id);
        $Company = Company::find($id);
        return view ('frontend.detailCompany', compact("Company"));
    }
}
