<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ConferenceController;
use Illuminate\Support\Facades\DB;


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


// -----------------------------------------


use App\Models\StudentInterest;
Route::get('/data', function () {

    $data = DB::table('students')
    ->select('students.id' , 'students.fullname' , 'students.email' ,
    'students.teaching' , 'students.subjectTeaching','students.usedChatGPT' ,
    DB::raw("group_concat(name_interest SEPARATOR ' , ') as name_interest")
    ,'students.aiTools', 'students.scheduling', 'students.trainingOnChatGPT'
    )

    ->join('interest_students','interest_students.interest_studentid','=','students.id')

    ->join('interests','interests.id','=','interest_students.interest_id')

    ->where("interest_students.confirmed", "=", 1)

    // ->select('students.id', 'students.fullname', 'students.email', 'students.teaching', 'students.subjectTeaching', 'students.usedChatGPT', 'students.aiTools', 'students.scheduling', 'students.trainingOnChatGPT', 'interests.name_interest', 'interest_students.confirmed')
    ->groupBy('students.id' , 'students.fullname' , 'students.email' ,
      'students.teaching' , 'students.subjectTeaching','students.usedChatGPT' ,'students.aiTools' ,'students.scheduling', 'students.trainingOnChatGPT')
    ->get();
    // $data = StudentInterest::where('interest_studentid', 1)->get();

    return dd($data);
});

// ---------------------



Route::post('/conference', [ConferenceController::class, 'store'])->name('addconference');
Route::get('/conference', [ConferenceController::class, 'show'])->name('conference');
