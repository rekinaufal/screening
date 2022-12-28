<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;
use App\Models\TempatAcara;
use DB;
use Auth;

class ContactUsController
{
    public static $pageTitle = 'Mempelai';
    
    public function index ()
    {
        $Article = DB::table('article')
                    ->orderByDesc('created_at',)
                    ->limit(3)
                    ->get();
        $Events = DB::table('events')->first();

        return view ('frontend.contact', compact ('Events', 'Article'));
    }

    public function SendMessage (Request $request) {
        $Message = new Message;
        $Message->full_name         = $request->full_name;
        $Message->email             = $request->email;
        $Message->job_title         = $request->job_title;
        $Message->company_name      = $request->company_name;
        $Message->message           = $request->message;
        $Message->save();

        $Article = DB::table('article')
        ->orderByDesc('created_at',)
        ->limit(3)
        ->get();

        $Events = DB::table('events')->first();

        $nameRegist = $request->full_name;
        $emailRegist = $request->email;
        $jobRegist = $request->job_title;
        $companyRegist = $request->company_name;
        $messageRegist = $request->message;
        $this->sendEmailMessage($nameRegist, $emailRegist, $jobRegist, $companyRegist, $messageRegist);
        
        // return view ('frontend.contact', compact ('Events', 'Article'))->with('success', 'Registration successfully, Please login');
       return redirect ('/contact-us')->with('success', 'Send Message Successfully, Thanks You');

    }

    public function sendEmailMessage ($name, $email, $job, $company, $message) {
        // dd($name . '-' . $email . '-' . $job . '-' . $company . '-' . $message);
        $details = [
            'title' => 'Message Screening Indonesia',
            'body1' => 'Hai Citra, You have message from ' . $name,
            'body2' => 'Email        : ' . $email, 
            'body3' => 'Job Title    : ' . $job, 
            'body4' => 'Company Name : ' . $company, 
            'body5' => 'Message      : ' . $message 
            ];
           
            \Mail::to('halo.screening.indonesia@gmail.com')->send(new \App\Mail\Email($details));
            // \Mail::to($email)->send(new \App\Mail\Email($details));
    }
}
