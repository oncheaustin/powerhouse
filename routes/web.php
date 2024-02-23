<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\HomepageController@home')->name('home');
Route::get('/instruction','App\Http\Controllers\HomepageController@instruction')->name('instruction');
Route::get('/registration','App\Http\Controllers\HomepageController@registration')->name('registration');
Route::get('/confirmemail','App\Http\Controllers\HomepageController@confirmemail')->name('confirmemail');
Route::get('/resendconfirmemail','App\Http\Controllers\HomepageController@resendconfirmemail')->name('resendconfirmemail');
Route::get('/thankyou','App\Http\Controllers\HomepageController@thankyou')->name('thankyou');
Route::post('/confirmemailsave','App\Http\Controllers\HomepageController@confirmemailsave')->name('confirmemailsave2');
Route::post('/registrationsave','App\Http\Controllers\HomepageController@registrationsave')->name('registrationsave2');
Route::post('/verifyemail','App\Http\Controllers\HomepageController@emailVerification')->name('verifyemail2');
Route::get('/logout','App\Http\Controllers\HomepageController@logout')->name('logout');
Route::get('admin/login','App\Http\Controllers\HomepageController@adminlogin')->name('adminlogin');
Route::post('loginpost','App\Http\Controllers\HomepageController@loginpost')->name('loginpost');
Route::get('admin/dashboard','App\Http\Controllers\HomepageController@admindashboard')->name('admindashboard');
Route::get('admin/registered','App\Http\Controllers\HomepageController@registered')->name('applicantregistered');

