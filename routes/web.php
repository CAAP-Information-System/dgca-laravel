<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\GalleryPostingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SideMeetingController;
use App\Mail\ApprovalMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/error', [HomeController::class, 'error_503'])->name('error');
Route::get('/403', [HomeController::class, 'error_403'])->name('403');
// ADMIN MIDDLEWARE
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard2', [AdminController::class, 'dashboardv2'])->name('dashboard2');
    Route::get('/meeting-reservations', [AdminController::class, 'reservation_view'])->name('meeting-reservations');
    Route::get('/account_list', [AdminController::class, 'account_list'])->name('account_list');
    Route::delete('/delete-account/{id}', [AdminController::class, 'deleteAccount'])->name('delete-account');
    Route::get('/create-meeting-room', [SideMeetingController::class, 'reserveMeetingRoom'])->name('reserveMeetingRoom');
    Route::get('/files', [AdminController::class, 'file_uploads'])->name('files');
    Route::delete('/delete/{id}', [FileController::class, 'deleteFile'])->name('file.delete');
    Route::get('/download/{file}', [FileController::class, 'download'])->name('download.file');
    Route::post('/update-access-role/{id}', [AdminController::class, 'updateAccessRole'])->name('update-access-role');
    Route::post('/update-meeting-room', [SideMeetingController::class, 'createMeetingRoom'])->name('createMeetingRoom');
    Route::get('/pending-accounts', [AdminController::class, 'viewPendingAccounts'])->name('pending-accounts');
    Route::get('/profile/{id}', [AdminController::class, 'viewUserProfile'])->name('user-profile');
    Route::post('/profile/approve/{id}', [AdminController::class, 'approveUser'])->name('user.approve');

    Route::get('/edit-files/{id}', [FileController::class, 'editFileName'])->name('editFileName');
    Route::post('/update-file/{id}', [FileController::class, 'updateFileName'])->name('updateFileName');
});



Route::middleware('public')->group(function () {
});
Route::get('/home', [HomeController::class, 'index'])->name('welcome');
Route::get('/welcome-message', [HomeController::class, 'viewWelcomeMessage'])->name('message');
Route::get('/agenda', [FileController::class, 'agendaFiles'])->name('agenda');
Route::get('/discussion-paper', [FileController::class, 'viewDiscussionPapers'])->name('disc-paper');
Route::get('/information-paper', [FileController::class, 'viewInformationPapers'])->name('info-paper');
Route::get('/the-gallery', [HomeController::class, 'viewGallery'])->name('the-gallery');
Route::get('/registration', [App\Http\Controllers\HomeController::class, 'viewRegistrationPage'])->name('registration-page');
Route::get('/participants', [HomeController::class, 'viewParticipants'])->name('participants');
Route::get('/list-of-participants', [HomeController::class, 'viewListParticipants'])->name('list-of-participants');
Route::get('/about-caap', [HomeController::class, 'viewAboutCAAP'])->name('about-caap');
Route::get('/our-sponsors', [HomeController::class, 'viewOurSponsors'])->name('our-sponsors');
Route::get('/meeting-room', [SideMeetingController::class, 'viewMeetingRoom'])->name('meeting-room');
Route::get('/program-overview', [HomeController::class, 'viewProgram'])->name('program-overview');
Route::delete('/meeting-room/{id}',  [SideMeetingController::class, 'deleteMeetingRoom'])->name('meeting-room.delete');

// News and Updates
Route::get('/news', [HomeController::class, 'viewNews'])->name('news');
Route::get('/create-news', [PostingController::class, 'createNews'])->name('create-news');
Route::post('/register-news', [PostingController::class, 'registerNews'])->name('register-news');
Route::get('/article/{id}', [HomeController::class, 'viewNewsArticle'])->name('article');

// Media Middleware
Route::prefix('media')->middleware(['auth', 'isMedia'])->group(function () {
    Route::get('/dashboard', [MediaController::class, 'dashboard'])->name('media-dashboard');
    Route::get('/create-news', [PostingController::class, 'createNews'])->name('create-news');
    Route::post('/register-news', [PostingController::class, 'registerNews'])->name('register-news');
    Route::get('/edit-news/{id}', [MediaController::class, 'edit'])->name('edit-news');
    Route::put('/update-news/{id}', [MediaController::class, 'update'])->name('update-news');
    Route::delete('/news/{id}', [MediaController::class, 'delete'])->name('delete-news');
    Route::get('/create-gallery', [GalleryPostingController::class, 'viewGalleryForm'])->name('create-gallery');
    Route::post('/register-image', [GalleryPostingController::class, 'registerImage'])->name('register-image');
});



Route::get('/bulletin', [HomeController::class, 'viewDelegateCorner'])->name('bulletin');
Route::get('/medical-support', [HomeController::class, 'viewMedicalSupport'])->name('medical-support');
Route::get('/venue', [HomeController::class, 'viewVenueInformation'])->name('venue');

Route::middleware('auth')->group(function () {
    Route::get('/create-file', [FileController::class, 'registerDocument'])->name('create.file');
    Route::get('/view-files', [FileController::class, 'viewFiles'])->name('viewFiles');
    Route::post('/files/upload', [FileController::class, 'upload'])->name('file.upload');
    Route::get('/files/view/{id}', [FileController::class, 'view'])->name('file.view');
    Route::delete('/delete/{id}', [FileController::class, 'delete'])->name('file.delete');
    Route::get('/view-submission', [FileController::class, 'viewSubmissionGuide'])->name('view-submission');
});



Route::get('send', [HomeController::class, 'sendNotif'])->name('send');
