<?php

use Illuminate\Support\Facades\Route;
use App\Providers\FortifyServiceProvider;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\UserController;


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
    return view('auth.login');
});
//Route::get('/home', HomeController::class, 'index')->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('ensembles1', ChambreController::class);
Route::resource('ensembles2', ClientController::class);
Route::resource('ensembles3', ReservationController::class);
Route::resource('ensembles4', FactureController::class);
Route::resource('ensembles5', PersonnelController::class);
Route::resource('ensembles6', UserController::class);

/*Route::get('/chamindex', [ChambreController::class, 'index'])->name('chamindex');
Route::get('/chamcreate', [ChambreController::class, 'create'])->name('chamcreate');
Route::get('edit/{id}', [ChambreController::class, 'edit'])->name('chamedit');
Route::post('/chamcreate', [ChambreController::class, 'store'])->name('chamstore');
Route::put('edit', [ChambreController::class, 'update']);
Route::delete('destroy/{id}', [ChambreController::class, 'destroy'])->name('chamdestroy');*/