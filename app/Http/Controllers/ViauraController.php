<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ViauraController extends Controller
{
     public function viaura(){
        return view("site1.Viaura");
    }

    public function EditProfile(){
        return view("site1.Edit-profile");
    }

       public function EditProfile_data(Request $request){
        dd($request->all());
        return view("site1.profile");
    }

    public function education(){
        return view("site1.education");
    }


     public function profile(){
        return view("site1.profile");
    }

    public function LoginSignup(){
        return view("site1.Login-Signup");
    }




        function LoginSignup_data(Request $request){

            $request->validate([
                'email_login' => 'required|email|ends_with:@gmail.com',
                'password_login'=> 'required|min:8',
                // 'email_signup' => 'required|email',
                // 'password_signup' => 'required|min:8|confirmed'
                 ]);
                    dd($request->all());
        }



         function data(Request $request){
 dd($request->all());
            $request->validate([
                // 'email_login' => 'required|email|ends_with:@gmail.com',
                // 'password_login'=> 'required|min:8',
                'email_signup' => 'required|email',
                'password_signup' => 'required|min:8|confirmed'
                 ]);
                    dd($request->all());
        }




        public function footer(){
        return view("site1.footer");
    }



        public function resetPassword(){
        return view("site1.resetPassword");
    }

         public function resetPassword_data(Request $request){
            // dd($request->all());
        return view("site1.sendcode");
    }

    //     public function ProfileSetup(){
    //     return view("site1.ProfileSetup");
    // }

    //     public function ProfileSetup_data(){
    //     return view("site1.ProfileSetup");
    // }

          public function sendcode(){
        return view("site1.sendcode");
          }

          public function sendcode_data(){
          return view("site1.sendcode");
          }



        public function contact(){
         return view("site1.Viaura");

          }


           public function contact_data(Request $request){
            $request->validate([
                'name' => 'required|min:3',
                'email' => 'required|ends_with:@gmail.com',
                'phone' =>  'required|max:15',
                'message' => 'required|string'
            ]);

               $data = $request->except('_token');

                Mail::to('Admin@gmail.com')->queue(new contactMail( $data ));

                dd($data);

            // dd($request->all());
        //   return view("site1.sendcode");
          }



}


