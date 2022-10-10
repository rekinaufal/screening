<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\About;
use Session;
// use App\Models\Mempelai;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;

class AboutBackendController extends Controller
{
    public static $pageTitle = 'About';
    
    public function index ()
    {
        $About = About::all();
        $pageTitle = "About";
        return view ('about.index', compact('pageTitle', 'About'));
    }

    public function create()
    {
        $About = new About();
        $pageTitle = self::$pageTitle;
        return view('about.create', compact('About', 'pageTitle'));
    }

    public function store(Request $request)
    {
        request()->validate(About::$rules);

        // $req = $request->all();
        $About = new About;
        $About->title        = $request->title;
        $About->description  = $request->description;
        $About->created_by   = Auth::user()->id;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/about/backend', $file_name);

            $About->image = '/assets/image/screening-indonesia/about/backend/' . $file_name;
        }
        // $Pria = Pria::create($req);
        $About->save();

        return redirect()->route('about.index')
            ->with('success', 'About created successfully.');
    }

    public function show ($id)
    {
        $About = About::find($id);
        $pageTitle = self::$pageTitle;

        return view ('about.show', compact('pageTitle', 'About'));
    }

    public function edit($id)
    {
        $About = About::find(decrypt($id));
        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('about.edit', compact('About', 'pageTitle'));
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
            $file->move(base_path() . '/public/assets/image/screening-indonesia/about/backend', $file_name);
            
            $fieldUpdate = [
                'title'         => $request->input('title'),
                'image'         => '/assets/image/screening-indonesia/about/backend/' . $file_name,
                'description'   => $request->input('description'),
                'updated_by'    => Auth::user()->id,
            ];
        }else{
            $fieldUpdate = [
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'updated_by'    => Auth::user()->id,
            ];
        }
      
        $update = DB::table('about')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('about.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        // delete file foto  
        $gambarold = About::find($id);
        File::delete(base_path() . '/public' . $gambarold->image); //hapus foto old

        $About = About::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('about.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
}
