<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\AdminController;
use App\Http\Controllers\Web\Backend\FaqController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//FAQ::Manage
Route::get('/faq',[FaqController::class, 'index'])->name('faq');
Route::get('/faq/create',[FaqController::class, 'createFqa'])->name('faq.create');
Route::post('/create/questions',[FaqController::class,'storeQuestion'])->name('create.questions');


//Show fQa list
Route::get('/question',[FaqController::class,'showfaq'])->name('question');


//Edit && update Fqa
Route::get('/edit-faq/{id}', [FaqController::class, 'edit'])->name('edit.faq');
Route::put('/update-faq/{id}', [FaqController::class, 'update'])->name('update.faq');

//delete question
Route::delete('/deletequestion/{id}', [FaqController::class, 'deletefaq'])->name('deletefaq');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
