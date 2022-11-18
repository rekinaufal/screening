<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\News;
use Session;
// use App\Models\Mempelai;

use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;

class NewsBackendController extends Controller
{
    public static $pageTitle = 'News';
    
    public function index ()
    {
        $News = News::all();
        $pageTitle = "News";
        return view ('news.index', compact('pageTitle', 'News'));
    }

    public function create()
    {
        $pageTitle = self::$pageTitle;
        return view('news.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $News = News::create([
            'text' => $request->text,
            'status' => 1,
            'created_by' =>  Auth::user()->id,
        ]);
      

        return redirect()->route('news.index')
            ->with('success', 'News created successfully.');
    }

    public function edit($id)
    {
        $News = News::find($id);
        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('news.edit', compact('News', 'pageTitle'));
    }

    public function update(Request $request, $id)
    { 
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
           Session::flash('message', 'Session Expired, Please Login Again!'); 
           Session::flash('alert-class', 'alert-danger'); 
           return redirect('/login');
       }
            
        $fieldUpdate = [
            'text' => $request->text,
            'status' => $request->status,
            'updated_by'    => Auth::user()->id,
        ];
        $update = DB::table('news')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('news.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $News = News::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('news.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }

    
    public function detail ($id)
    {
        $id = decrypt($id);
        $News = DB::table('news')
        ->where('id',$id)
        ->first();
        return view ('frontend.detailNews', compact ('News'));
    }
}
