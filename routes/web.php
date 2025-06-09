<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\socilaitecontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [FrontendController::class, 'home'])->name('index');


//-------------------------------------help for business---------------------------
Route::get('addbusiness', [FrontendController::class, 'addBusiness'])->name('addbusiness');
Route::get('claim', [FrontendController::class, 'Claim'])->name('claim');
Route::get('Explore', [FrontendController::class, 'explore'])->name('Explore');
Route::get('login', [FrontendController::class, 'Login'])->name('login');

//--------------------------------review and start project-----------------------
Route::get('review', [FrontendController::class, 'Review'])->name('review');
Route::get('project', [FrontendController::class, 'Project'])->name('project');

//------------------------------resturant----------------------------------------
Route::get('takeout', [FrontendController::class, 'Takeout'])->name('takeout');
Route::get('contractor', [FrontendController::class, 'Contractor'])->name('contractor');

// signup
Route::get('signup', [FrontendController::class, 'Signup'])->name('signup');
Route::post('signup/insert', [FrontendController::class, 'insert'])->name('insert');


// signin in google
Route::get('index', [socilaitecontroller::class, 'Googlelogin'])->name('google.login');
Route::get('index/google-callback', [socilaitecontroller::class, 'Googleauthentication'])->name('index.google-callback');


// signin
Route::get('sigin', [FrontendController::class, 'Sigin'])->name('sigin');
Route::post('sigincheck', [FrontendController::class, 'SigninCheck'])->name('signincheck');



Auth::routes(['verify' => true]);


