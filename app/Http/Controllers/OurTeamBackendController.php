<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Ourteam;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;
class OurTeamBackendController extends Controller
{
    public static $pageTitle = 'OurTeam';
    
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
        $Ourteam = Ourteam::all();
        $pageTitle = self::$pageTitle;
        return view ('ourteam.index', compact('pageTitle', 'Ourteam'));
    }

    public function create()
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Ourteam = new OurTeam();
        $pageTitle = self::$pageTitle;
        return view('ourteam.create', compact('Ourteam', 'pageTitle'));
    }

    public function store(Request $request)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        // request()->validate(Pria::$rules);
        if(!empty($_FILES['image']['name'])) {
            $request->hasFile('image');
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/ourteam/backend', $file_name);
            $OurTeam = OurTeam::create([
                'name' => $request->name,
                'position' => $request->position,
                'description' => $request->description,
                'image' => '/assets/image/screening-indonesia/ourteam/backend/' . $file_name,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
                
                // 'created_by' => Auth::user()->id
            ]);
        }else{
            $OurTeam = OurTeam::create([
                'name' => $request->name,
                'position' => $request->position,
                'description' => $request->description,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
            ]);
        }
      

        return redirect()->route('ourteam.index')
            ->with('success', 'OurTeam created successfully.');
    }

    public function show ($id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $OurTeam = DB::table('our_team')
        ->where('status', 1)
        ->get();
      
        $Abouts = DB::table('about')
        ->where('status', 1)
        ->first();
        
        $Category = DB::table('category')
        ->where('status', 1)
        ->get();
        $pageTitle = self::$pageTitle;

        return view ('our_team.show', compact('pageTitle', 'OurTeam','Abouts','Category'));
    }

    public function GetDetailOurTeam ($id)
    {
        // $OurTeam = DB::table('our_team')
        // ->where('status', 1)
        // ->get();
        // $pageTitle = self::$pageTitle;

        // return view (compact('pageTitle', 'OurTeam'));
    }

    public function edit($id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Ourteam = DB::table('ourteam')
        ->where('id',decrypt($id))
        ->first();

        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('ourteam.edit', compact('Ourteam', 'pageTitle'));
    }

    public function update(Request $request, $id)
    { 
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        if($request->hasFile('image')){
	        File::delete(base_path() . '/public' . $request->input('imageold')); //hapus foto old

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/ourteam/backend', $file_name);
            
            $fieldUpdate = [
                'name'          => $request->input('name'),
                'position'      => $request->input('position'),
                'description'   => $request->input('description'),
                'image'       => '/assets/image/screening-indonesia/ourteam/backend/' . $file_name,
                'updated_by'    => Auth::user()->id,
            ];
        }else{
            $fieldUpdate = [
                'name'          => $request->input('name'),
                'position'      => $request->input('position'),
                'description'   => $request->input('description'),
                'updated_by'    => Auth::user()->id,
            ];
        }
      
        $update = DB::table('ourteam')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('ourteam.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        // delete file foto  
        $gambarold = Ourteam::find($id);
        File::delete(base_path() . '/public' . $gambarold->image); //hapus foto old

        $Ourteam = Ourteam::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('ourteam.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
        
    public function our_team ()
    {
        $OurTeam = DB::table('our_team')
        ->where('status', 1)
        ->get();

        $Abouts = DB::table('about')
        ->where('status', 1)
        ->first();
        
        $Category = DB::table('category')
        ->where('status', 1)
        ->get();
        $pageTitle = self::$pageTitle;
        return view ('our_team.our_team', compact('pageTitle', 'OurTeam', 'Abouts', 'Category'));
    }
}
