<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViauraController;

Route::get('/', function () {
    return view("site1.Viaura");
});

      Route::prefix('viaura')->name('viaura.')->controller(ViauraController::class)
         ->group(function(){
          Route::get('/', 'viaura')->name('viaura');

          Route::get('/edit-profile', 'EditProfile')->name('edit-profile');
          Route::post('/edit-profile', 'EditProfile_data')->name('EditProfile_data');

          Route::get('/education', 'education')->name('education');

          Route::get('/LoginSignup', 'LoginSignup')->name('LoginSignup');
          Route::post('/LoginSignup', 'LoginSignup_data')->name('LoginSignup_data');
        //   Route::post('/Login', 'Login_data')->name('Login_data');
          Route::post('/Signup', 'Signup_data')->name('Signup_data');


          Route::get('/profile', 'profile')->name('profile');

          Route::get('/resetPassword', 'resetPassword')->name('resetPassword');
          Route::post('/resetPassword', 'resetPassword_data')->name('resetPassword_data');

          Route::get('/profileSetup', 'ProfileSetup')->name('ProfileSetup');
          Route::post('/profileSetup', 'ProfileSetup_data')->name('ProfileSetup_data');


          Route::get('/footer', 'footer')->name('footer');

          Route::get('/sendcode', 'sendcode')->name('sendcode');
          Route::post('/sendcode', 'sendcode_data')->name('sendcode_data');

      });



      Route::get('/contact' , [ViauraController::class, 'contact'])->name('contact');

      Route::post('/data' , [ViauraController::class, 'data'])->name('data');

      Route::post('/contact_data' , [ViauraController::class, 'contact_data'])->name('contact_data');

