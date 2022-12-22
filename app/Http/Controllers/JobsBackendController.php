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
use ZipArchive;

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
        $Jobs = Jobs::all();
        // dd($Jobs);
        $pageTitle = self::$pageTitle;
        return view ('jobs.index', compact('pageTitle', 'Jobs'));
    }

    public function download ($id) 
    {
        $Applied = DB::table('applied')
        ->select('talent.file_cv', 'jobfair.position')
        ->join('jobfair', 'applied.id_jobfair', '=', 'jobfair.id')
        ->join('company', 'jobfair.id_company', '=', 'company.id')
        ->join('talent', 'applied.id_user', '=', 'talent.id_user')
        ->where('applied.id_jobfair', $id)
        ->get();

        // $zip = new ZipArchive;
        // $fileName = 'myNewFile.zip';
        // if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        // {
        //     $files = File::files(public_path('/assets/cv/'));
        //     dd($files);
        //     foreach ($files as $key => $value) {
        //         $relativeNameInZipFile = basename($value);
        //         dd($zip->addFile($value, $relativeNameInZipFile));
        //         $zip->addFile($value, $relativeNameInZipFile);
        //     }
             
        //     $zip->close();
        // }
    
        // return response()->download(public_path($fileName));
// dd($Applied);
        // if (!empty($Applied)) {
        //     if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        //     {
        //         foreach ($Applied as $key => $value) {
        //             // $file = str_replace("/assets/cv/", "", $value->file_cv);
        //             // $relativeNameInZipFile = $file;
        //             // dd(public_path($value->file_cv));
        //             $path =  public_path($value->file_cv);
        //             $relativeName = basename($path);
        //             $zip->addFile($path, $relativeName);
        //         }
        //         $zip->close();
        //     }
        
        //     return response()->download(public_path($fileName));
        // }
        // dd($Applied);
        $randomString = Str::random(10);
        $zip_file = $randomString.'_'.'Jobs.zip';
        // dd($zip_file); 
        $zip = new \ZipArchive();
        
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);
        foreach ($Applied as $key => $value) {
            $invoice_file = $value->file_cv;
            $zip->addFile(public_path($invoice_file), $invoice_file);
        }
        $zip->close();
        return response()->download($zip_file);
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
        ->where('id', decrypt($id))
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
      
        $update = DB::table('jobfair')->where('id', $id)->update($fieldUpdate);

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

        $Jobs = Jobs::where('id', $id)->delete();

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
