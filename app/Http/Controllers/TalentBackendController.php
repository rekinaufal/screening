<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Talent;
use App\Models\User;
use App\Models\Province;
use App\Models\Cities;
use Illuminate\Support\Facades\Storage;
use DB;
use File;
use Illuminate\Support\Facades\Auth;
use Session;

class TalentBackendController extends Controller
{
    public static $pageTitle = 'Talent';
    
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
        $Talent = Talent::all();
        // dd($Talent); die;
        $pageTitle = self::$pageTitle;
        return view ('Talent.index', compact('pageTitle', 'Talent'));
    }

    public function create()
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Talent = new Talent();
        $list_user = User::select("id", "name")->get();
        $list_provinces = Province::select("id", "name")->get();
        $pageTitle = self::$pageTitle;
        return view('Talent.create', compact('Talent', 'pageTitle', 'list_user', 'list_provinces'));
    }

    public function getCitiesByProvince(Request $request){
        $cities = Cities::select("id", "name")->where("province_id", $request->id)->get();
        return response()->json($cities);
    }

    public function store(Request $request)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $file_foto_diri = null;
        $file_name_foto = null;

        $file_identitas = null;
        $file_name_identitas = null;

        $file_cv = null;
        $file_name_cv = null;
        
        if($request->hasFile("foto_diri")){
            $file_foto_diri = $request->file('foto_diri');
            $file_name_foto = Str::random(30) . '_' . $file_foto_diri->getClientOriginalName();
            $file_foto_diri->move(base_path() . '/public/assets/image/screening-indonesia/talent/backend', $file_name_foto);
        }

        if($request->hasFile("file_identitas")){
            $file_identitas = $request->file('file_identitas');
            $file_name_identitas = Str::random(8) . '_' . $file_identitas->getClientOriginalName();
            $file_identitas->move(base_path() . '/public/assets/image/screening-indonesia/talent/backend', $file_name_identitas);
        }

        if($request->hasFile("file_cv")){
            $file_cv = $request->file('file_cv');
            $file_name_cv = Str::random(8) . '_' . $file_cv->getClientOriginalName();
            $file_cv->move(base_path() . '/public/assets/image/screening-indonesia/talent/backend', $file_name_cv);
        }

        Talent::create([
            'nama_lengkap' => $request->nama_lengkap,
            'foto_diri' => $file_name_foto === null ? null : '/assets/image/screening-indonesia/talent/backend/' . $file_name_foto,
            'nama_panggilan' => $request->nama_panggilan,
            'no_identitas' => $request->no_identitas,
            'file_identitas' => $file_name_identitas === null ? null : '/assets/image/screening-indonesia/talent/backend/' . $file_name_identitas,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'status_pernikahan' => $request->status_pernikahan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'provinsi' => $request->provinsi,
            'kota_kabupaten' => $request->kota_kabupaten,
            'file_cv' => $file_name_cv === null ? null : '/assets/image/screening-indonesia/talent/backend/' . $file_name_cv,
            'tanggal_daftar' => $request->tanggal_daftar,
            'status' => $request->status,
            'ig' => $request->ig,
            'linkin' => $request->linkin,
            'twiter' => $request->twiter,
            'tiktok' => $request->tiktok,
            'id_user' => $request->id_user,
            'created_by'    => Auth::user()->id
        ]);
      

        return redirect()->route('talents.index')
            ->with('success', 'Talent created successfully.');
    }

    public function edit($id)
    {
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }
        $Talent = DB::table('talent')
        ->where('id',decrypt($id))
        ->first();
        // dd($Talent);

        $list_user = User::select("id", "name")->get();
        $list_provinces = Province::select("id", "name")->get();
        $list_cities = Cities::select("id", "name")->where("province_id", $Talent->provinsi)->get();

        $pageTitle = self::$pageTitle;
        // $pageBreadcrumbs = self::$pageBreadcrumbs;
        // $pageBreadcrumbs[] = [
        //     'page' => '/application/memoItemIns/'.$id.'/edit',
        //     'title' => 'Update '.self::$pageTitle,
        // ];

        return view('Talent.edit', compact('Talent', 'pageTitle', 'list_user', 'list_cities', 'list_provinces'));
    }

    public function update(Request $request, $id)
    { 
         if(optional(Auth::user())->id == null OR optional(Auth::user())->id == ''){
            Session::flash('message', 'Session Expired, Please Login Again!'); 
            Session::flash('alert-class', 'alert-danger'); 
            return redirect('/login');
        }

        $file_foto_diri = null;
        $file_name_foto = null;

        $file_identitas = null;
        $file_name_identitas = null;

        $file_cv = null;
        $file_name_cv = null;
        
        if($request->hasFile("foto_diri")){
            File::delete(base_path() . '/public' . $request->input('foto_diri_old')); //hapus foto old

            $file_foto_diri = $request->file('foto_diri');
            $file_name_foto = Str::random(30) . '_' . $file_foto_diri->getClientOriginalName();
            $file_foto_diri->move(base_path() . '/public/assets/image/screening-indonesia/talent/backend', $file_name_foto);
        }

        if($request->hasFile("file_identitas")){
            File::delete(base_path() . '/public' . $request->input('file_identitas_old')); //hapus foto old

            $file_identitas = $request->file('file_identitas');
            $file_name_identitas = Str::random(8) . '_' . $file_identitas->getClientOriginalName();
            $file_identitas->move(base_path() . '/public/assets/image/screening-indonesia/talent/backend', $file_name_identitas);
        }

        if($request->hasFile("file_cv")){
            File::delete(base_path() . '/public' . $request->input('file_cv_old')); //hapus foto old

            $file_cv = $request->file('file_cv');
            $file_name_cv = Str::random(8) . '_' . $file_cv->getClientOriginalName();
            $file_cv->move(base_path() . '/public/assets/image/screening-indonesia/talent/backend', $file_name_cv);
        }
        
        $fieldUpdate = [
            'nama_lengkap' => $request->nama_lengkap,
            'foto_diri' => $file_name_foto === null ? $request->foto_diri_old : '/assets/image/screening-indonesia/talent/backend/' . $file_name_foto,
            'nama_panggilan' => $request->nama_panggilan,
            'no_identitas' => $request->no_identitas,
            'file_identitas' => $file_name_identitas === null ? $request->file_identitas_old : '/assets/image/screening-indonesia/talent/backend/' . $file_name_identitas,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'status_pernikahan' => $request->status_pernikahan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'provinsi' => $request->provinsi,
            'kota_kabupaten' => $request->kota_kabupaten,
            'file_cv' => $file_name_cv === null ? $request->file_cv_old : '/assets/image/screening-indonesia/talent/backend/' . $file_name_cv,
            'tanggal_daftar' => $request->tanggal_daftar,
            'status' => $request->status,
            'ig' => $request->ig,
            'linkin' => $request->linkin,
            'twiter' => $request->twiter,
            'tiktok' => $request->tiktok,
            'id_user' => $request->id_user,
            'updated_by'    => Auth::user()->id,
        ];
      
        $update = DB::table('talent')->where('id', $id)->update($fieldUpdate);

        return redirect()->route('talents.index')
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
        $fileold = Talent::find($id);
        File::delete(base_path() . '/public' . $fileold->foto_diri); 
        File::delete(base_path() . '/public' . $fileold->file_identitas); 
        File::delete(base_path() . '/public' . $fileold->file_cv); 

        $Talent = Talent::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('talents.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
    
}
