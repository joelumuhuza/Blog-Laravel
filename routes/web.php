<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\MainController;

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


// Route::get('/',[IndexController::class,'jo'])->name('form1');

// .....................................

// Route::post('result',[IndexController::class,'jo'])->name('form1')->middleware('post');

// Route::get('/',function(){
//     return view('welcome');
// });

Route::get('/form1',[CRUDController::class, 'create']);
Route::post('/form1',[CRUDController::class, 'store']);
Route::get('/show',[CRUDController::class, 'show'])->name("show");
Route::get('delete/{id?}',[CRUDController::class, 'destroy'])->name('delete');

Route::get('/form2',[LoginControler::class, 'create']);
//Route::get('/main',[CRUDController::class, 'index']);

//Route::get('/test',function(){
//     return view('Select');
//});

Route::get('/', function () {
    return view('index');
});

Route::post('result',[MainController::class,'index'])->name('main')->middleware('post');

// Route::get('/uploadfile', 'UploadfileController@index');
// Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main',[MainController::class, 'index']);

// Route::get('/main', [MainController::class, 'index']);
Route::post('/main/checklogin',[MainController::class, 'checklogin']);
Route::get('main/successlogin',[MainController::class, 'successlogin']);
Route::get('main/logout', [MainController::class, 'logout']); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
