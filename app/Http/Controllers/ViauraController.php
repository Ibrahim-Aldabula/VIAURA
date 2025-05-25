<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViauraController extends Controller
{
     public function viaura(){
        return view("site1.Viaura");
    }

    public function EditProfile(){
        return view("site1.Edit-profile");
    }

    public function education(){
        return view("site1.education");
    }

     public function LoginSignup(){
        return view("site1.Login-Signup");
    }


       public function LoginSignup_data(Request $request){

            $request->validate([
                'email'=> ['required','email'],
                'password'=> ['required','min:8']
                // 'password'=> ['required','min:8','confirmed'];'email'=> ['required','email','ends_with:@gmail.com'

                    ]);
                    //  dd($request->all());



         return view("site1.viaura");
    }

      public function contact(){
        return view("site1.Contact");
    }

}
