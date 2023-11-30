<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ConferenceController;

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

Route::get('/resultats2', [ConferenceController::class, 'resultats']);
Route::get('/resultats2-conference', [ConferenceController::class, 'resultatsConference'])->name('resultatsConference');
Route::get('/changestate/{id}', [ConferenceController::class, 'changeState'])->name('changeState');

Route::get('/export-conference',[ConferenceController::class,'exportConferences'])->name('export-conferences');
Route::get('/certificate-conference-1/{id}',[ConferenceController::class,'showCertificate'])->name('showCertificate');


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/', [StudentController::class, 'index'])->name('home');
// Route::get('/home', [StudentController::class, 'index'])->name('home2');
Route::post('/', [StudentController::class, 'store'])->name('add');
Route::get('/', [StudentController::class, 'show'])->name('home');
Route::get('/resultats', [StudentController::class, 'resultats']);
Route::get('/export', [StudentController::class,'export'])->name('export-student');



Route::post('/conference', [ConferenceController::class, 'store'])->name('addconference');
Route::get('/conference', [ConferenceController::class, 'show'])->name('conference');
