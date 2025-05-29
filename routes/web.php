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
          Route::put('/edit-profile', 'EditProfile_data');

          Route::get('/education', 'education')->name('education');

          Route::get('/Login-Signup', 'LoginSignup')->name('Login-Signup');
          Route::post('/Login-Signup', 'LoginSignup_data');

          Route::get('/profile', 'profile')->name('profile');

          Route::get('/resetPassword', 'ResetPassword')->name('resetPassword');

          Route::get('/profileSetup', 'ProfileSetup')->name('profileSetup');

          Route::get('/contact', 'contact')->name('contact');

          Route::get('/footer', 'footer')->name('footer');

      });
