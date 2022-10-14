<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Jobs;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

class JobsBackendController extends Controller
{
    public static $pageTitle = 'Jobs';
    
    public function index ()
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        // $Ourteam = DB::table('ourteam')
        // ->where('status', 1)
        // ->get();
        $Jobs = Jobs::all();
        // dd($Jobs); die;
        $pageTitle = self::$pageTitle;
        return view ('jobs.index', compact('pageTitle', 'Jobs'));
    }

    public function create()
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $list_company = Company::select("nama_perusahaan", "id")->get();
        $Jobs = new Jobs();
        $pageTitle = self::$pageTitle;
        return view('jobs.create', compact('Jobs', 'pageTitle', 'list_company'));
    }

    public function store(Request $request)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        
        $Jobs = Jobs::create([
            'id_company' => $request->id_company,
            'division' => $request->division,
            'position' => $request->position,
            'location' => $request->location,
            'job_description' => $request->job_description,
            'recuirement' => $request->recuirement,
            'experience_level' => $request->experience_level,
            'job_type' => $request->job_type,
            'year_of_experience' => $request->year_of_experience,
            'qualification_degree' => $request->qualification_degree,
            'sallary' => $request->sallary,
            'status' => $request->status,
            'highlight' => $request->highlight,
            'created_by' => Auth::user()->id
        ]);
      

        return redirect()->route('jobs.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit($id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $list_company = Company::select("nama_perusahaan", "id")->get();
        // dd($list_company);
        $Jobs = DB::table('jobfair')
        ->where('id_jobfair', decrypt($id))
        ->first();

        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('jobs.edit', compact('Jobs', 'pageTitle', 'list_company'));
    }

    public function update(Request $request, $id)
    { 
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
            
        $fieldUpdate = [
            'id_company' => $request->id_company,
            'division' => $request->division,
            'position' => $request->position,
            'location' => $request->location,
            'job_description' => $request->job_description,
            'recuirement' => $request->recuirement,
            'experience_level' => $request->experience_level,
            'job_type' => $request->job_type,
            'year_of_experience' => $request->year_of_experience,
            'qualification_degree' => $request->qualification_degree,
            'sallary' => $request->sallary,
            'status' => $request->status,
            'highlight' => $request->highlight,
            'updated_by'    => Auth::user()->id,
        ];
      
        $update = DB::table('jobfair')->where('id_jobfair', $id)->update($fieldUpdate);

        return redirect()->route('jobs.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        $Jobs = Jobs::where('id_jobfair', $id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('jobs.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
    
}
