<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Events;
use Session;
// use App\Models\Mempelai;

use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;

class EventBackendController extends Controller
{
    public static $pageTitle = 'Events';
    
    public function index ()
    {
        $Events = Events::all();
        $pageTitle = "Events";
        return view ('events.index', compact('pageTitle', 'Events'));
    }

    public function create()
    {
        $pageTitle = self::$pageTitle;
        return view('events.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Events = Events::create([
            'text' => $request->text,
            'is_main' => $request->is_main !== null ? $request->is_main : 0,
            'status' => 1,
            'created_by' =>  Auth::user()->id,
        ]);
      

        return redirect()->route('events.index')
            ->with('success', 'Events created successfully.');
    }

    public function edit($id)
    {
        $Events = Events::find($id);
        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('events.edit', compact('Events', 'pageTitle'));
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
            'is_main' => $request->is_main,
            'updated_by'    => Auth::user()->id,
        ];
        $update = DB::table('events')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('events.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $Events = Events::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('events.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
}
