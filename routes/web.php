<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SideMeetingController;
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

// ADMIN MIDDLEWARE
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/meeting-reservations', [AdminController::class, 'reservation_view'])->name('meeting-reservations');
    Route::get('/account_list', [AdminController::class, 'account_list'])->name('account_list');
    Route::get('/meeting-room', [SideMeetingController::class, 'reserveMeetingRoom'])->name('reserveMeetingRoom');
    Route::get('/files', [AdminController::class, 'file_uploads'])->name('files');
    Route::get('/download/{file}', [FileController::class, 'download'])->name('download.file');

    Route::post('/update-meeting-room', [SideMeetingController::class, 'createMeetingRoom'])->name('createMeetingRoom');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/welcome-message', [HomeController::class, 'viewWelcomeMessage'])->name('message');
Route::get('/agenda', [FileController::class, 'agendaFiles'])->name('agenda');
Route::get('/discussion-paper', [HomeController::class, 'viewDiscussionPapers'])->name('disc-paper');
Route::get('/information-paper', [HomeController::class, 'viewInformationPapers'])->name('info-paper');
Route::get('/the-gallery', [HomeController::class, 'viewGallery'])->name('the-gallery');
Route::get('/participants', [HomeController::class, 'viewParticipants'])->name('participants');
Route::get('/list-of-participants', [HomeController::class, 'viewListParticipants'])->name('list-of-participants');

Route::get('/meeting-room', [SideMeetingController::class, 'viewMeetingRoom'])->name('meeting-room');


Route::get('/bulletin', [HomeController::class, 'viewDelegateCorner'])->name('bulletin');


Route::middleware('auth')->group(function () {
    Route::get('/create-file', [FileController::class, 'registerDocument'])->name('registerDocument');
    Route::get('/view-files', [FileController::class, 'viewFiles'])->name('viewFiles');
    Route::post('/files/upload', [FileController::class, 'upload'])->name('file.upload');
    Route::get('/files/view/{id}', [FileController::class, 'view'])->name('file.view');
    Route::delete('/delete/{id}', [FileController::class, 'delete'])->name('file.delete');
});

Route::get('send', [HomeController::class, 'sendNotif']);
