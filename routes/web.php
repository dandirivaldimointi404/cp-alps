<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GovermentDevController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\MobileDevController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController;
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

// Route::get('/', function () {
//     return view('loginadmin.index');
// });




Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');
Route::resource('webdev', WebDevController::class);
Route::resource('mobiledev', MobileDevController::class);
Route::resource('goverment', GovermentDevController::class);
Route::resource('umum', UmumController::class);
Route::resource('profill', ProfileController::class);
Route::resource('klien', KlienController::class);
Route::resource('blog', BlogController::class)->parameters([
  'blog' => 'blog:slug',
]);

Route::middleware('auth')->group(function () {
  Route::resource('testimoni', TestimoniController::class);
  Route::resource('berita', BeritaController::class)->parameters([
      'berita' => 'berita:slug',
  ]);
});

Route::get('/loginadmin', [LoginAdminController::class, 'index'])->name('loginadmin')->middleware('guest');
Route::post('/loginadmin', [LoginAdminController::class, 'store']);
Route::post('/keluar', [LoginAdminController::class, 'keluar']);

