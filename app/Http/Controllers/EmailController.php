<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    
    public function index(){

 $details = [
    'title' => 'Mail from websitepercobaan.com',
    'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('nengrusnia@gmail.com')->send(new \App\Mail\Email($details));
   
    dd("Email sudah terkirim.");

 }
}
