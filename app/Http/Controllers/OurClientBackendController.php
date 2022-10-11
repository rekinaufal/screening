<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\OurClient;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

class OurClientBackendController extends Controller
{
    public static $pageTitle = 'OurClient';
    
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
        $OurClient = OurClient::all();
        $pageTitle = self::$pageTitle;
        return view ('ourclient.index', compact('pageTitle', 'OurClient'));
    }

    public function create()
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $OurClient = new OurClient();
        $pageTitle = self::$pageTitle;
        return view('ourclient.create', compact('OurClient', 'pageTitle'));
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
            $file->move(base_path() . '/public/assets/image/screening-indonesia/ourclient/backend', $file_name);
            $OurClient = OurClient::create([
                'name' => $request->name,
                'image' => '/assets/image/screening-indonesia/ourclient/backend/' . $file_name,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
                
                // 'created_by' => Auth::user()->id
            ]);
        }else{
            $OurClient = OurClient::create([
                'name' => $request->name,
                'status' => 1,
                'created_by' =>  Auth::user()->id,
            ]);
        }
      

        return redirect()->route('our-clients.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit($id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $OurClient = DB::table('our_clients')
        ->where('id',decrypt($id))
        ->first();

        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('ourclient.edit', compact('OurClient', 'pageTitle'));
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
            $file->move(base_path() . '/public/assets/image/screening-indonesia/ourclient/backend', $file_name);
            
            $fieldUpdate = [
                'name'          => $request->input('name'),
                'image'       => '/assets/image/screening-indonesia/ourclient/backend/' . $file_name,
                'updated_by'    => Auth::user()->id,
            ];
        }else{
            $fieldUpdate = [
                'name'          => $request->input('name'),
                'updated_by'    => Auth::user()->id,
            ];
        }
      
        $update = DB::table('our_clients')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('our-clients.index')
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
        $gambarold = OurClient::find($id);
        File::delete(base_path() . '/public' . $gambarold->image); //hapus foto old

        $OurClient = OurClient::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('our-clients.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
    
}
