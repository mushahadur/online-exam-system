<?php

use App\Models\Exam;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\Exam\ExamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.pages.home.index');
})->name('home');

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/english-exam', [ExamController::class, 'english'])->name('english');
    Route::get('/math-exam', [ExamController::class, 'math'])->name('math');
    Route::post('/exam-submit', [ExamController::class, 'submitExam'])->name('examSubmit');
    Route::get('/result-shit/{id}', [ExamController::class, 'myResult'])->name('my.result');


});

require __DIR__.'/auth.php';
