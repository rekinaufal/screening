<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\HistoryExport;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

// export excel
use Excel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use App\Exports\AppliedCompanyExport;
use App\Exports\AppliedCompanyExportWhere;

class AppliedController extends Controller
{
    public static $pageTitle = 'Applied';
    
    public function index ()
    {
       
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        
        $Applied = DB::table('applied')
        ->select('talent.nama_lengkap', 'applied.id_user', 'talent.file_cv')
        ->join('jobfair', 'applied.id_jobfair', '=', 'jobfair.id')
        ->join('company', 'jobfair.id_company', '=', 'company.id')
        ->join('talent', 'applied.id_user', '=', 'talent.id_user')
        ->where('applied.status', 1)
        ->groupBy('talent.nama_lengkap', 'applied.id_user', 'talent.file_cv')
        ->get();
    //    dd($Applied);
      
        $pageTitle = self::$pageTitle;
        return view ('applied.index', compact('pageTitle', 'Applied'));
    }


}
