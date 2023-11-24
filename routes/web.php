<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/welcome-message', [HomeController::class, 'viewWelcomeMessage'])->name('message');
Route::get('/agenda', [HomeController::class, 'viewAgenda'])->name('agenda');
Route::get('/disc-paper', [HomeController::class, 'viewDiscussionPapers'])->name('disc-paper');
Route::get('/the-gallery', [HomeController::class, 'viewGallery'])->name('the-gallery');
