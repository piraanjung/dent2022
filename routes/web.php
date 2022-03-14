<?php

use App\Http\Controllers\DentistController;
use App\Http\Controllers\DentistSkillController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TreatmentController;
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

//Route::get('/treatment',[TreatmentController::class, 'index'])->name('treatment');
// Route::get('/treatment', function () {
//     return view('/treatment.index');
// });

// Route::get('/dentist', function () {
//     return view('/dentist.index');
// });

// Route::get('/dentist.create', function () {
//     return view('/dentist.create');
// });

Route::resource('treatment', TreatmentController::class);

Route::resource('dentist', DentistController::class);

Route::resource('skill', DentistSkillController::class);
Route::get('/skill/create/{id}', [DentistSkillController::class, 'skill_create']);

//Route deleted global
Route::get('/treatment-delete/{id}', [TreatmentController::class, 'delete']);
Route::get('/dentist-delete/{id}', [DentistController::class, 'delete']);


Route::get('/menu', function () {
    return view('/menu');
});



require __DIR__.'/auth.php';
