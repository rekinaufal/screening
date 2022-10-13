<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:1|max:255',
            'status' => 'required|min:1|max:255'
        ]);
//        $validateData['password'] = bcrypt($validateData['password']);
       $validateData['password'] = Hash::make($validateData['password']); 
        User::create($validateData);
//        $request->session()->flash('success', 'Registration successfully, Please login');
       return redirect ('/login')->with('success', 'Registration successfully, Please login');
    }
}
