<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\utsController;
use App\Http\Controllers\prak9Controller;
use App\Http\Controllers\prak7Controller;
use App\Http\Controllers\prak10Controller;
use App\Http\Controllers\prak11Controller;
/*
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', function () {
   // return view('layout.index');
//});
//Route::get('/', function () {
    //return view('layout.about');
//});

//Route::get('/about', function () {
//echo "ini merupakan contoh sebuah page (page about)"  ;
//})->name("about");

//Route::get('/show/{id?}', function ($id=1) {
//echo "Nilai Parameter Adalah ".$id;
//})->where('id','[0-9]+');

//Route::get('/home', function () {
//echo "<a href='".route('about')."'>page about </a>";
//});

//Route::get('/produk', [produkcontroller::class,'index']); 

//Route::get('/latihanview01', function () {
//    return view("latihan01") ;
//}); 

Route::get('/prak7',[utsController::class,'index']);

Route::get('/produk',[utsController::class,'index']);

Route::get('/prak9_1',[prak9Controller::class,'QB_tgs1']);
Route::get('/prak9_2',[prak9Controller::class,'QB_tgs2']);
Route::get('/prak9_3',[prak9Controller::class,'QB_tgs3']);

Route::resource('/prak10',prak10Controller::class);
Route::resource('/prak11',prak11Controller::class);