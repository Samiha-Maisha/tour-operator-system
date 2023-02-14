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

Route::get('/home',[\App\Http\Controllers\HomeController::class,'gotoHomePage']);
Route::get('/about',[\App\Http\Controllers\AboutController::class,'gotoAboutPage']);

Route::get('/todo',[\App\Http\Controllers\TodoController::class,'gotoTodoIndex']);
Route::get('/todo_add', [\App\Http\Controllers\TodoController::class,'gotoTodoAddView']);

Route::post('/store_new_post',[\App\Http\Controllers\TodoController::class,'addANewPost']);


Route::get('/signup',[\App\Http\Controllers\UsernewController::class,'goToSignUpPage']);
Route::get('/login',[\App\Http\Controllers\UsernewController::class,'goToLoginPage']);
Route::get('/',[\App\Http\Controllers\UsernewController::class,'goToLoginPage']);

Route::post('/auth/signup',[\App\Http\Controllers\UsernewController::class,'addNewUser']);
Route::post('/auth/login',[\App\Http\Controllers\UsernewController::class,'checkUser']);

Route::post('/tour_detail/{sent_id}',[\App\Http\Controllers\TourController::class, 'goToTourDetailPage'])->name('detailedTour');
Route::get('/traveler_home_page', [\App\Http\Controllers\HomeController::class,'gotoTravelerHomePage'])->name('travelerhome');
Route::get('/travel_agency_home_page', [\App\Http\Controllers\HomeController::class,'gotoTravelAgencyHomePage'])->name('travelagencyhome');

Route::get('/tour_posting_page', [\App\Http\Controllers\TourController::class,'goToTourPostingPage']);
Route::post('/tour_posted', [\App\Http\Controllers\TourController::class, 'addTour']);
