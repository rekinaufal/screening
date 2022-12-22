<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\ServiceDetails;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;

class ServiceBackendController extends Controller
{
    public static $pageTitle = 'Service';
    
    public function index ()
    {
        $Service = Service::all();
        $ServiceDetails = ServiceDetails::all();
        $pageTitle = self::$pageTitle;
        return view ('service.index', compact('pageTitle', 'Service', 'ServiceDetails'));
    }

    public function create()
    {
        $Service = new Service();
        $pageTitle = self::$pageTitle;
        return view('service.create', compact('Service', 'pageTitle'));
    }

    public function store(Request $request)
    {
        request()->validate(Service::$rules);

        // $req = $request->all();
        $Service                = new Service;
        $Service->category      = $request->category;
        $Service->title_1       = $request->title_1;
        $Service->description_1 = $request->description_1;
        $Service->title_2       = $request->title_2;
        $Service->description_2 = $request->description_2;
        $Service->created_by    = Auth::user()->id;
        $Service->save();

        return redirect()->route('service.index')
            ->with('success', 'Service created successfully.');
    }

    public function show ($id)
    {
        $Service = Service::find($id);
        $pageTitle = self::$pageTitle;

        return view ('service.show', compact('pageTitle', 'Service'));
    }

    public function edit($id)
    {
        $Service = Service::find(decrypt($id));
        $pageTitle = self::$pageTitle;

        return view('service.edit', compact('Service', 'pageTitle'));
    }

    public function update(Request $request, $id)
    { 
        $fieldUpdate = [
            'category'      => $request->input('category'),
            'title_1'      => $request->input('title_1'),
            'description_1'      => $request->input('description_1'),
            'title_2'      => $request->input('title_2'),
            'description_2'      => $request->input('description_2'),
            'updated_by'=> Auth::user()->id,
        ];
        $update = DB::table('service')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('service.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $Service = Service::find($id)->delete();

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
