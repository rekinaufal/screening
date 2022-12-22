<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public static $pageTitle = 'Login';
    
    public function index() {
        $Article = DB::table('article')->limit(5)->get();
        $Events = DB::table('events')->first();

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

        $pageTitle = self::$pageTitle;
        return view ('login.index', compact('pageTitle', 'bilangan1', 'bilangan2','rand_operator','Capctha','Hasil', 'Events', 'Article'));
    }

    public function adminPanel() {
        $Article = DB::table('article')->limit(5)->get();
        $Events = DB::table('events')->first();

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

        $pageTitle = self::$pageTitle;
        return view ('login.admin_panel', compact('pageTitle', 'bilangan1', 'bilangan2','rand_operator','Capctha','Hasil', 'Events', 'Article'));
    }

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
            '_answer'   =>  'required',
        ]);
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);


        if($_POST['Hasil'] == $_POST['_answer']){
            $GetDataUser1           = DB::table('users')->where('email', $credentials['email'])->first();
            if (!empty($GetDataUser1)) {
            $GetDataUserStatus 	    = json_decode(json_encode($GetDataUser1), true);
            }else{
                return back()->with('loginError', 'Email Not Found');
            }
        }else{
            return back()->with('loginError', 'Invalid Capcha');
        }
        
        if ($request->uri == 'admin_panel') {
            $GetDataAdmin = DB::table('users')->where('email', $credentials['email'])->first();
            if ($GetDataUserStatus['status'] != 'Admin') {
                return back()->with('loginError', 'You Are Not Admin, Your Status Is '.$GetDataUserStatus['status']);
            }
        } elseif ($request->uri == 'talent') {
            $GetDataAdmin = DB::table('users')->where('email', $credentials['email'])->first();
            if ($GetDataUserStatus['status'] != 'Talent') {
                return back()->with('loginError', 'You Are Not Talent, Your Status Is '.$GetDataUserStatus['status']);
            }
        } elseif ($request->uri == 'company') {
            $GetDataAdmin = DB::table('users')->where('email', $credentials['email'])->first();
            if ($GetDataUserStatus['status'] != 'Company') {
                return back()->with('loginError', 'You Are Not Company, Your Status Is '.$GetDataUserStatus['status']);
            }
        } else {
            return back()->with('loginError', 'Warning! Please Contact Administrator');

        }
        
        if ($GetDataUserStatus['status'] == 'Admin') {
            if(Auth::attempt($credentials)){
                $request->session()->put('id',$GetDataUserStatus['id']);
                $request->session()->put('name',$GetDataUserStatus['name']);
                $request->session()->put('status',$GetDataUserStatus['status']);
                // $request->session()->regenerate();
                return redirect()->intended('/admin');
            }
        }else {
            if(Auth::attempt($credentials)){
                $request->session()->put('id',$GetDataUserStatus['id']);
                $request->session()->put('name',$GetDataUserStatus['name']);
                $request->session()->put('status',$GetDataUserStatus['status']);
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }
        return back()->with('loginError', 'Login Failed');
    }

    public function logout(){
        // jika tidak ingin memakai Request $request, bisa memakai request()
        Auth::logout();
        Session::flush();
        // request()->session()->invalidate();
    
        // request()->session()->regenerateToken();
    
        return redirect('/');
    }
}
