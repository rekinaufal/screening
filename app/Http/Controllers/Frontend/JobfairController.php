<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Jobfair;
use App\Models\Applied;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

class JobfairController
{
    public static $pageTitle = 'Jobfair';

    public function jobfairDetail ($id)
    {
        
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        $Jobfair = DB::table('jobfair')
        ->select('*')
        ->join('company', 'jobfair.id_company', '=', 'company.id')
        ->where('jobfair.id',decrypt($id))
        ->first();
        // dd($Jobfair);
        $id_jobfair = $Jobfair->id;
        $id_user =  Session::get('id');
        $Sql = "SELECT *
                FROM applied 
                WHERE id_jobfair = $id_jobfair
                and id_user = $id_user 
            ";
        $results  = DB::select(DB::raw($Sql));
        $ValidasiApply = json_decode(json_encode($results), true);
        // dd($ValidasiApply);
        $Abouts = DB::table('about')
        ->first();
        
        $Categories = DB::table('categories')
        ->get();

        $pageTitle = self::$pageTitle;
        return view ('frontend.detailJobfair', compact('pageTitle', 'Jobfair', 'ValidasiApply', 'Abouts', 'Categories'));
    }
    
    public function Applied (Request $request)
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Applied = Applied::create([
            'id_jobfair' => $request->id_jobfair,
            'id_user' => Auth::user()->id,
            'status' => 1,
            'created_by' =>  Auth::user()->id,
        ]);

        $Jobfair = DB::table('jobfair')
        ->select('*')
        ->join('company', 'jobfair.id_company', '=', 'company.id')
        ->get();
        // dd($Jobfair);
        Session::flash('message', 'Congratulations! Your application has been submitted'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect()->back();
    }
}
