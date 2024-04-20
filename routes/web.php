<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GovermentDevController;
use App\Http\Controllers\MobileDevController;
use App\Http\Controllers\UmumController;
use App\Http\Controllers\WebDevController;
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
    return view('layouts.landing2.master');
});

// Route::get('/', function () {
//     return view('layouts.landing.master');
// });

Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');
Route::resource('webdev', WebDevController::class);
Route::resource('mobiledev', MobileDevController::class);
Route::resource('goverment', GovermentDevController::class);
Route::resource('umum', UmumController::class);
