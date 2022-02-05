<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\Controller;
use App\Http\Controllers\databasecontroller;
use App\Http\Controllers\userdbcontroler;
use App\Http\Controllers\fileController;

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



Route::view('welcome','welcome')->middleware('routemiddleware');
Route::view('/buggerOff','buggerOff');
Route::post('user',[Controller::class,'postuser']);
Route::get('logout',[Controller::class,'logout']);
Route::View('file','fileUpload');
Route::post('fileupload',[fileController::class,'fileupload']);
Route::get('language/{lang}',function($lang){
    App::setlocale($lang);
    return View('language');
});
Route::get('dblist',[databasecontroller::class,'dataretrive']);
Route::group(['middleware'=>['position']],function(){
Route::get('about',[Controller::class,"userdata"]);
Route::get('home/{name}',[Controller::Class,"data"]);
Route::get('users',[userdbcontroler::Class,'fetch']);
Route::get('dog',[userdbcontroler::Class,'fetchapi']);
}

);

