<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
Route::get('/emailVerify', function () {
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

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('pawcare.admindash');
});

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {
    Route::get('/home', [UserController::class, 'home'])->name('pawcare.dash');
});

Route::group(['middleware' => ['auth','verified']], function () {
    
});
