<?php

use App\Http\Controllers\AdmissionformController;
use App\Http\Controllers\VisitorsController;
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
    return view('visitors.index');
});
// Route::view('media','Visitors.media')->name('media');
// Route::view('/{slug}','Visitors.'. $slug)->name('{slug}');
Route::get('/visitors/{slug}',[VisitorsController::class,'index'])->name('visitor');

Route::resource('admissionsform',AdmissionformController::class);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
