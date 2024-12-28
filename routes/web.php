<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Backend\AdminController;
use App\Http\Controllers\Web\Backend\FaqController;
use App\Http\Controllers\Web\Forntend\CmsController;
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



Route::get('/homepage-create',[CmsController::class, 'homepage'])->name('create.homepage');
//ForntEnd route//CMS
//about us 
Route::get('/about-us',[CmsController::class,'aboutUs'])->name('aboutus');
Route::post('/create/about-us',[CmsController::class,'storeAboutus'])->name('about-us');

//how it work
Route::get('/howitwork',[CmsController::class,'howtowork'])->name('howitwork');
Route::post('/create/howit-work',[CmsController::class,'storeHowitwork'])->name('create.howitwork');

//banner
Route::get('/banner',[CmsController::class,'index'])->name('banner');
Route::post('/banner/create',[CmsController::class, 'createBanner'])->name('banner.create');
//Route::edit('/banner/{$id}',[CmsController::class, 'editBanner'])->name('banner.edit');
//Route::put('/banner-update/{$id}',[CmsController::class, 'herobannerUpdate'])->name('banner.update');
//Home About
Route::get('/home/about',[CmsController::class,'homeAbout'])->name('home.about');
Route::post('/home/about/store',[CmsController::class,'homeAboutStore'])->name('home.store');

//home delership
Route::get('/home/delership',[CmsController::class,'delership'])->name('home.delership');
Route::post('/home/delership/create',[CmsController::class, 'storeDelership'])->name('delership.store');
require __DIR__.'/auth.php';
