<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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


Route::get('/forbidden', function () {
    return view('forbidden');
});


//Route Auth
Route::get('/login', [AuthController::class, 'index'])->name('pawcare.login'); 
Route::post('/proseslogin', [AuthController::class, 'login'])->name('pawcare.proseslogin'); 
Route::get('/register', [AuthController::class, 'create'])->name('pawcare.register'); 
Route::post('/prosesregister', [AuthController::class, 'register'])->name('pawcare.prosesregister'); 
Route::get('/proseslogout', [AuthController::class, 'logout'])->name('pawcare.logout'); 
Route::get('/email-verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');
 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/', [UserController::class, 'index'])->name('pawcare.home');
Route::get('/about', [UserController::class, 'about'])->name('pawcare.about');
Route::get('/contact', [UserController::class, 'contact'])->name('pawcare.contact');
Route::get('/service', [UserController::class, 'service'])->name('pawcare.service');

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('pawcare.admindash');

    //Klinik
    Route::get('/adminklinik', [AdminController::class, 'showKlinik'])->name('pawcare.adminklinik');
    Route::get('/addklinik', [AdminController::class, 'createKlinik'])->name('pawcare.addKlinik');
    Route::get('/editklinik-{id}', [AdminController::class, 'editKlinik'])->name('pawcare.editKlinik');
    Route::put('/updateklinik-{id}', [AdminController::class, 'updateKlinik'])->name('pawcare.updateKlinik');
    Route::post('/prosesaddklinik', [AdminController::class, 'storeKlinik'])->name('pawcare.prosesaddklinik');
    Route::delete('/deleteklinik-{id}', [AdminController::class, 'destroyKlinik'])->name('pawcare.destroyKlinik');

    //Jam Praktik
    Route::get('/adminjampraktik', [AdminController::class, 'showJamPraktik'])->name('pawcare.adminJamPraktik');
    Route::get('/addjampraktik', [AdminController::class, 'createJamPraktik'])->name('pawcare.addJamPraktik');
    Route::post('/prosesaddjampraktik', [AdminController::class, 'storeJamPraktik'])->name('pawcare.prosesaddjampraktik');
    Route::get('/editjampraktik-{id}', [AdminController::class, 'editJamPraktik'])->name('pawcare.editJamPraktik');
    Route::put('/updateklinik-{id}', [AdminController::class, 'updateJamPraktik'])->name('pawcare.updateJamPraktik');
    Route::delete('/deletejampraktik-{id}', [AdminController::class, 'destroyJamPraktik'])->name('pawcare.destroyJamPraktik');
    
    //Users
    Route::get('/adminusers', [AdminController::class, 'showUsers'])->name('pawcare.adminUsers');
    Route::get('/adduser', [AdminController::class, 'createUsers'])->name('pawcare.addUsers');
    Route::post('/prosesadduser', [AdminController::class, 'storeUsers'])->name('pawcare.prosesadduser');
    Route::get('/edituser-{id}', [AdminController::class, 'editUsers'])->name('pawcare.editUsers');
    Route::put('/updateuser-{id}', [AdminController::class, 'updateUsers'])->name('pawcare.updateuser');
    Route::delete('/deleteuser-{id}', [AdminController::class, 'destroyUsers'])->name('pawcare.destroyUsers');

    //Appointments
    Route::get('/adminappoitnments', [AdminController::class, 'showAppointments'])->name('pawcare.adminAppointments');
    Route::get('/editappointments-{id}', [AdminController::class, 'editAppointments'])->name('pawcare.editAppointments');
    Route::put('/prosesupdateappointments-{id}', [AdminController::class, 'storeAppointments'])->name('pawcare.prosesaddAppointments');
    Route::delete('/deleteappointment-{id}', [AdminController::class, 'destroyAppointments'])->name('pawcare.destroyAppointments');
});

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {
    Route::get('/home', [UserController::class, 'home'])->name('pawcare.dash');
    Route::get('/my-profile', [UserController::class, 'myprofile'])->name('pawcare.myprofile');
    Route::get('/edit-profile', [UserProfileController::class, 'edit'])->name('pawcare.editprofile');
    Route::put('/update-profile', [UserProfileController::class, 'update'])->name('pawcare.updateprofile');
    
});

Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/appointment-{id}', [UserController::class, 'appointment'])->name('pawcare.appointment');
    Route::post('/create-appointment', [UserController::class, 'createappointment'])->name('pawcare.createappointment');
    Route::get('/cliniclist', [UserController::class, 'cliniclist'])->name('pawcare.cliniclist');
    Route::get('/clinicdetails-{id}', [UserController::class, 'clinicdetails'])->name('pawcare.clinicdetails');
    Route::get('/confirm-user', [UserController::class, 'confirmuser'])->name('pawcare.confirmuser');
    Route::get('/activity', [UserController::class, 'activity'])->name('pawcare.activity');
});
