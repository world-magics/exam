<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users',[UserController::class,'index']);
Route::get('/users/create',[UserController::class,'create']);
Route::get('/users/{user}',[UserController::class,'show']);
Route::get('/users/{user}/edit',[UserController::class,'edit']);

// // Route::get('/test',function(){
// //     return view('test');
// // });
// Route::view('/test', 'test');


// Route::get('/users/{id?}',function($user_id=null){
//     return 'Users '.$user_id;
// })->name('userlar');
// Route::post('contact',function(){
//     return 'post route';
// });
// Route::redirect('birinchi','ikkinchi');
// Route::get('ikkinchi',function(){
//     return 'ikkinchi';
// });
