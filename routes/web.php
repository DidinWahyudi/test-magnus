<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\DestinationController;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/', [HomeController::class, 'index'])->name('home');


//feature
Route::resource('/feature', FeatureController::class);
Route::get('/feature', [FeatureController::class, 'index'])->name('feature');

//destination
Route::resource('/destination', DestinationController::class);
Route::get('/destination', [DestinationController::class, 'index'])->name('destination');
