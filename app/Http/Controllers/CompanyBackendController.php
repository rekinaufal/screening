<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

class CompanyBackendController extends Controller
{
    public static $pageTitle = 'Company';
    
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
        $Company = Company::all();
        // dd($Company); die;
        $pageTitle = self::$pageTitle;
        return view ('company.index', compact('pageTitle', 'Company'));
    }

    public function create()
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Company = new Company();
        $pageTitle = self::$pageTitle;
        return view('company.create', compact('Company', 'pageTitle'));
    }

    public function store(Request $request)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        // request()->validate(Pria::$rules);
        if(!empty($_FILES['logo']['name'])) {
            $request->hasFile('logo');
            $file = $request->file('logo');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/company/backend', $file_name);
            $Company = Company::create([
                'nama_perusahaan' => $request->nama_perusahaan,
                'provinsi' => $request->provinsi,
                'kota_kabupaten' => $request->kota_kabupaten,
                'kelurahan' => $request->kelurahan,
                'desa' => $request->desa,
                'alamat' => $request->alamat,
                'nomor_telpon' => $request->nomor_telpon,
                'email' => $request->email,
                'website_perusahaan' => $request->website_perusahaan,
                'logo' => '/assets/image/screening-indonesia/company/backend/' . $file_name,
                'nama_pimpinan' => $request->nama_pimpinan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'bisnis' => $request->bisnis,
                'created_by' => Auth::user()->id
            ]);
        }else{
            $Company = Company::create([
                'name_perusahaan' => $request->nama_perusahaan,
                'provinsi' => $request->provinsi,
                'kota_kabupaten' => $request->kota_kabupaten,
                'kelurahan' => $request->kelurahan,
                'desa' => $request->desa,
                'alamat' => $request->alamat,
                'nomor_telpon' => $request->nomor_telpon,
                'email' => $request->email,
                'website_perusahaan' => $request->website_perusahaan,
                'nama_pimpinan' => $request->nama_pimpinan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'bisnis' => $request->bisnis,
                'created_by' => Auth::user()->id
            ]);
        }
      

        return redirect()->route('companies.index')
            ->with('success', 'Client created successfully.');
    }

    public function edit($id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Company = DB::table('company')
        ->where('id',decrypt($id))
        ->first();

        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('company.edit', compact('Company', 'pageTitle'));
    }

    public function update(Request $request, $id)
    { 
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        if($request->hasFile('logo')){
	        File::delete(base_path() . '/public' . $request->input('logoold')); //hapus foto old

            $file = $request->file('logo');
            $name = $file->getClientOriginalName();
            $file_name = Str::random(30) . '_' . $name;
            $file->move(base_path() . '/public/assets/image/screening-indonesia/company/backend', $file_name);
            
            $fieldUpdate = [
                'nama_perusahaan' => $request->nama_perusahaan,
                'provinsi' => $request->provinsi,
                'kota_kabupaten' => $request->kota_kabupaten,
                'kelurahan' => $request->kelurahan,
                'desa' => $request->desa,
                'alamat' => $request->alamat,
                'nomor_telpon' => $request->nomor_telpon,
                'email' => $request->email,
                'website_perusahaan' => $request->website_perusahaan,
                'logo' => '/assets/image/screening-indonesia/company/backend/' . $file_name,
                'nama_pimpinan' => $request->nama_pimpinan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'bisnis' => $request->bisnis,
                'updated_by'    => Auth::user()->id,
            ];
        }else{
            $fieldUpdate = [
                'nama_perusahaan' => $request->nama_perusahaan,
                'provinsi' => $request->provinsi,
                'kota_kabupaten' => $request->kota_kabupaten,
                'kelurahan' => $request->kelurahan,
                'desa' => $request->desa,
                'alamat' => $request->alamat,
                'nomor_telpon' => $request->nomor_telpon,
                'email' => $request->email,
                'website_perusahaan' => $request->website_perusahaan,
                'nama_pimpinan' => $request->nama_pimpinan,
                'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
                'bisnis' => $request->bisnis,
                'updated_by'    => Auth::user()->id,
            ];
        }
      
        $update = DB::table('company')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('companies.index')
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
        $gambarold = Company::find($id);
        File::delete(base_path() . '/public' . $gambarold->logo); //hapus foto old

        $Company = Company::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('companies.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
    
}
