<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\ServiceDetails;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;

class ServiceDetailsBackendController extends Controller
{
    public static $pageTitle = 'Service Details';
    
    public function index ()
    {
        $ServiceDetails = ServiceDetails::all();
        $pageTitle = self::$pageTitle;
        return view ('service_details.index', compact('pageTitle', 'ServiceDetails'));
    }

    public function create()
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        $ServiceDetails = new ServiceDetails();
        $pageTitle = self::$pageTitle;
        return view('service_details.create', compact('ServiceDetails', 'pageTitle'));
    }

    public function store(Request $request)
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        if(!empty($_FILES['image']['name'])) {
            $request->hasFile('image');
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/service_details/backend', $file_name);
            $ServiceDetails = ServiceDetails::create([
                'category' => $request->category,
                'image' => '/assets/image/screening-indonesia/service_details/backend/' . $file_name,
                'title' => $request->title,
                'description' => $request->description,
                'created_by' =>  Auth::user()->id,
            ]);
        }else{
            $ServiceDetails = ServiceDetails::create([
                'category' => $request->category,
                'title' => $request->title,
                'description' => $request->description,
                'created_by' =>  Auth::user()->id,
            ]);
        }

        return redirect()->route('service.index')
            ->with('success', 'Service Details created successfully.');
    }

    public function show ($id)
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        $ServiceDetails = ServiceDetails::find($id);
        $pageTitle = self::$pageTitle;

        return view ('service_details.show', compact('pageTitle', 'ServiceDetails'));
    }

    public function edit($id)
    {
        if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        $ServiceDetails = ServiceDetails::find(decrypt($id));
        $pageTitle = self::$pageTitle;

        return view('service_details.edit', compact('ServiceDetails', 'pageTitle'));
    }

    public function update(Request $request, $id)
    { 

        if($request->hasFile('image')){
	        File::delete(base_path() . '/public' . $request->input('imageold')); //hapus foto old

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/service_details/backend', $file_name);
            
            $fieldUpdate = [
                'category'         => $request->input('category'),
                'title'         => $request->input('title'),
                'image'         => '/assets/image/screening-indonesia/service_details/backend/' . $file_name,
                'description'   => $request->input('description'),
                'updated_by'    => Auth::user()->id,
            ];
        }else{
            $fieldUpdate = [
            'category'         => $request->input('category'),
            'title'         => $request->input('title'),
            'description'   => $request->input('description'),
            'updated_by'    => Auth::user()->id,
            ];
        }
      
        $update = DB::table('service_details')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('service.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $ServiceDetails = ServiceDetails::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('service.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
}
