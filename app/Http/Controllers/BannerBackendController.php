<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

class BannerBackendController extends Controller
{
    public static $pageTitle = 'Banner';
    
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
        $Banner = Banner::all();
        $pageTitle = self::$pageTitle;
        return view ('banner.index', compact('pageTitle', 'Banner'));
    }

    public function create()
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Banner = new Banner();
        $pageTitle = self::$pageTitle;
        return view('banner.create', compact('Banner', 'pageTitle'));
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
            $file->move(base_path() . '/public/assets/image/screening-indonesia/banner/backend', $file_name);
            $Banner = Banner::create([
                'text' => $request->text,
                'image' => '/assets/image/screening-indonesia/banner/backend/' . $file_name,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
                
                // 'created_by' => Auth::user()->id
            ]);
        }else{
            $Banner = Banner::create([
                'text' => $request->text,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
            ]);
        }
      

        return redirect()->route('banners.index')
            ->with('success', 'Banner created successfully.');
    }

    public function edit($id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Banner = DB::table('banner')
        ->where('id',decrypt($id))
        ->first();

        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('banner.edit', compact('Banner', 'pageTitle'));
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
            $file->move(base_path() . '/public/assets/image/screening-indonesia/banner/backend', $file_name);
            
            $fieldUpdate = [
                'text'          => $request->input('text'),
                'image'       => '/assets/image/screening-indonesia/banner/backend/' . $file_name,
                'status' => $request->status,
                'updated_by'    => Auth::user()->id,
            ];
        }else{
            $fieldUpdate = [
                'text'          => $request->input('text'),
                'status' => $request->status,
                'updated_by'    => Auth::user()->id,
            ];
        }
      
        $update = DB::table('banner')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('banners.index')
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
        $gambarold = Banner::find($id);
        File::delete(base_path() . '/public' . $gambarold->image); //hapus foto old

        $Banner = Banner::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('banners.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
    
}
