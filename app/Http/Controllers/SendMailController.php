<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function index(){
    $mailData = [
        'name' => 'James Steave',
        'email' => 'hackton33@gmail.com',
        'signup_date' => date('Y-m-d'),
    ];

    Mail::to('hackton33@gmail.com')->send(new SendMail($mailData));

    return 'Email sent successfully!';
   

}
}