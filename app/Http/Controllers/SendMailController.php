<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
/*use App\Models\User;*/

use App\Mail\SendMail;
use Illuminate\Http\Request;
/*use App\Models\Management;
use App\Models\ZavodsGallery;
use App\Models\ManufGallery;
use App\Models\Structure_gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;*/
use Illuminate\Support\Facades\Mail;
/*use Illuminate\Support\Facades\Session;*/

class SendMailController extends Controller
{
    public function send_message(){
        return view('frontend.send_message.send_message');
    }
    public function send(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
            'theme'=>'required',

        ]);
        $data = array(
            'name' => $request->name,
            'message' => $request->message,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'theme'=> $request->theme,
        );
        Mail::to('infouptrz@gmail.com')->send(new SendMail($data));
        return back()->with('success','Спасибо за обращение!');


    }
}
