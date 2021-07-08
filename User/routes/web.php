<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome')
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

// Route::view('login', 'admin.login');

// Route::get('/login', function () {
//     return view('admin.login');
// });


route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');


Route::get('/register', function () {
    return view('user.register');
});


Route::view('/pencarian', 'user.pencarian');
Route::view('/tips', 'user.tips');
Route::view('/profil', 'user.profil');