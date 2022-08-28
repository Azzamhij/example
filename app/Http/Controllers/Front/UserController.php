<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */
public function showadminname(){
    return 'Azzam';
}
public function showindex(){
    /*$data=[];
    $data['id']=5;
    $data['name']="Azzam Hijazi";*/
   /* $obj=new \stdClass();
    $obj->name='Azzam';
    $obj->age=20;*/
    $data=["Azzam","Wissam"];

    return view('welcome',compact("data")/*,compact('obj') */)/*->with('name','Azzam Hijazi')*/;
}
}
