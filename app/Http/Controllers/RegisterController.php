<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Talent;
use App\Models\Company;
use Auth;
use Str;
use DB;

class RegisterController extends Controller
{
    public static $pageTitle = 'Register';
    
    public function index() {
        $pageTitle = self::$pageTitle;

        $operator  = array('+', '-');
        $rand_operator = $operator[array_rand($operator, 1)];
        $min_number = 1;
        $max_number = 10;
        $bilangan1 = mt_rand($min_number, $max_number);
        $bilangan2 = mt_rand($min_number, $max_number);
        if($bilangan1 < $bilangan2){
            $bilangan1 = $bilangan2;
            $bilangan2 = $bilangan1;
        }
        $Capctha = "$bilangan1 $rand_operator $bilangan2";
        if($rand_operator == "+"){
            $Hasil = $bilangan1 + $bilangan2;
        }else{
            $Hasil = $bilangan1 - $bilangan2;
        }

        return view ('register.index', compact('pageTitle', 'bilangan1', 'bilangan2', 'rand_operator', 'Capctha', 'Hasil'));
    }

    public function storeTalent(Request $request) {
        // dd($request);
        $validateData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:1|max:255',
            'status' => 'required|min:1|max:255'
            
        ]);
//        $validateData['password'] = bcrypt($validateData['password']);
       $validateData['password'] = Hash::make($validateData['password']); 
       $validateData['remember_token'] = substr(mt_rand(1000, 9999), 0, 5);

        if(!empty($_FILES['file_cv']['name'])) { 
            $request->hasFile('file_cv');
            $file = array();
            $file = $request->file('file_cv');
            foreach ($file as $file_cv){
                $name = $file_cv->getClientOriginalName();
                $file_name = Str::random(30) . '_' . $name;
                $file_cv->move(base_path() . '/public/assets/cv', $file_name);
                // $file->move(base_path() . '/public/assets/cv', $file_name);
                $data[] = $file_name;
                if($_FILES['file_cv']['size'][0] < 5097152){
                    $file_cv = User::create([
                        'name'          => $request->nama_lengkap,
                        'email'         => $request->email,
                        'password'      => $validateData['password'],
                        'status'        => $request->status,
                        'created_by'    => (Auth::user()) ? Auth::user()->id : null,

                    ]);
                    $email = $request->email;
                    $User               = DB::table('users')->where('email', $email)->first();
                    $GetDataUserEmail 	= json_decode(json_encode($User), true);

                    $Talent = Talent::create([
                        'id_user' => $GetDataUserEmail['id'],
                        'nama_lengkap' => $request->nama_lengkap,
                        'file_cv' => '/assets/cv/' . $file_name
                    ]);
                 
                }else{
                    Session::flash('message', 'File To Large!!! Max Size:5MB'); 
                    Session::flash('alert-class', 'alert-danger'); 
                    return back();
                }
            }
        }
       return redirect ('/login')->with('success', 'Registration successfully, Please login');
    }

    public function storeCompany(Request $request) {
        // dd($request);
        $validateData = $request->validate([
            'nama'          => 'required|max:255',
            'email'         => 'required|email:dns|unique:users',
            'password'      => 'required|min:1|max:255',
            'status'        => 'required|min:1|max:255'
            
        ]);
//        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']); 
        $validateData['remember_token'] = substr(mt_rand(1000, 9999), 0, 5);
        // dd($validateData['password']);

        $User = User::create([
            'name'          => $request->nama,
            'email'         => $request->email,
            'password'      => $validateData['password'],
            'status'        => $request->status,
            'created_by'    => (Auth::user()) ? Auth::user()->id : null,
        ]);

        $email = $request->email;
        $User               = DB::table('users')->where('email', $email)->first();
        $GetDataUserEmail 	= json_decode(json_encode($User), true);
        // dd($GetDataUserEmail['id']);

        $Company = Company::create([
            'id_user' => $GetDataUserEmail['id'],
            'nama_perusahaan' => $request->nama,
        ]);
                 
       return redirect ('/login')->with('success', 'Registration successfully, Please login');
    }
}
