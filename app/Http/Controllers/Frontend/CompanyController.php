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
        $JobFair = DB::table('jobfair as j')
                    ->select('j.id as id_jobs', 'c.id as id_company', 'c.logo' , 'c.nama_perusahaan', 'j.position', 'c.provinsi')
                    ->join('company as c', 'j.id_company', '=', 'c.id')
                    // ->where('jobfair.status', 1)
                    // ->where('jobfair.highlight',1)
                    // ->paginate(6);
                    ->get();

        // dd($JobFair);
        $Company = DB::table('company')
                    // ->where('status', 1)
                    ->get();

        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $Events = DB::table('events')->first();
        
        return view ('frontend.company', compact('JobFair', 'Company', 'Article', 'Events'));
    }

    public function search (Request $request) {

        $JobFair = DB::table('jobfair')
                    ->join('company', 'jobfair.id_company', '=', 'company.id')
                    ->where('company.nama_perusahaan',  'like', '%'.$request->company.'%')
                    ->where('company.provinsi', 'like', '%'.$request->location.'%')
                    ->where('jobfair.position', 'like', '%'.$request->position.'%')
                    // ->where('jobfair.status', 1)
                    // ->where('company.highlight',1) karna blm ada fitur highlight
                    ->get();
        
        $Company = DB::table('company')
            // ->where('status', 1)
            ->get();
        return view ('frontend.company', compact('JobFair', 'Company'));
    }

    public function detail ($id)
    {
        $id = decrypt($id);
        $Company = Company::find($id);
        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $Events = DB::table('events')->first();
        $Jobs = Jobs::where("id_company", $id)->get();
        return view ('frontend.detailCompany', compact("Company", "Jobs", 'Events', 'Article'));
    }
}
