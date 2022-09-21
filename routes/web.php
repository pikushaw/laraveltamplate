<?php
use App\Http\Controllers\ContactControllerController;
use App\Http\Controllers\indexController;
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

Route::get('/',function(){
    return view('index');
});
Route::get('services',[indexController::class,'serv']);
Route::get('about',[indexController::class,'about']);
Route::get('portfolio',[indexController::class,'portfolio']);
Route::get('team',[indexController::class,'team']) ->name('team');

Route::resource('/contact',ContactControllerController::class);
Route::get('/admin/',function(){
    return view('admin.index');
});
/*Route::get('/admin/result',function(){   return view('admin.result');
});*/

Route::resource('result',ContactControllerController::class);