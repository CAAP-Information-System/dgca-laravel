<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
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
Route::get('/discussion-paper', [HomeController::class, 'viewDiscussionPapers'])->name('disc-paper');
Route::get('/information-paper', [HomeController::class, 'viewInformationPapers'])->name('info-paper');
Route::get('/the-gallery', [HomeController::class, 'viewGallery'])->name('the-gallery');
Route::get('/participants', [HomeController::class, 'viewParticipants'])->name('participants');
Route::get('/list-of-participants', [HomeController::class, 'viewListParticipants'])->name('list-of-participants');

Route::get('/meeting-room', [HomeController::class, 'viewMeetingRoom'])->name('meeting-room');
Route::get('/schedule/day1', [ScheduleController::class, 'day1'])->name('schedule-day1');
Route::get('/schedule/day2', [ScheduleController::class, 'day2'])->name('schedule-day2');
Route::get('/schedule/day3', [ScheduleController::class, 'day3'])->name('schedule-day3');

Route::get('/bulletin', [HomeController::class, 'viewDelegateCorner'])->name('bulletin');
