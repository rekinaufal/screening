<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
 
use App\Mail\MalasngodingEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
	public function index(){
 
		Mail::to("rekinaufal@gmail.com")->send(new MalasngodingEmail());
 
		return "Email telah dikirim";
 
	}
 
}