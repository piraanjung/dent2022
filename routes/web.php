<?php

use App\Http\Controllers\MenuController;
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

/*Route::get('/employee', function () {
    return view('employee.index');
})->middleware(['auth'])->name('employee');*/

Route::group(['middleware'=>['auth']], function() {
    Route::get('/dashboard',[MenuController::class, 'index'])->name('dashboard');
});

//Route::get('/treatment',[MenuController::class, 'routeTreatment'])->name('treatment');
Route::get('/treatment', function () {
    return view('treatment.index');
});

Route::get('/menu', function () {
    return view('/menu');
});



require __DIR__.'/auth.php';
