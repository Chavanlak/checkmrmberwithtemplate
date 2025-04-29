<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashbord.test');
});


Route::get('/main', function () {
    return view('layout.mainlayout');
});

Route::get('/admin', function () {
    return view('layout.adminlayout');
});
Route::get('/admindash', function () {
    return view('dashbord.admindashbord');
});
Route::get('/dashbord', function () {
    return view('dashbordtest');
});
Route::get('/sign', function () {
    return view('layout.auth.signin');
});
Route::get('/changepassword', function () {
    return view('auth/changepassword');
});

Route::get('/Adminregister', function () {
    return view('auth/registerByAdmin');
});
// Route::get('/changepasswordAdmin', function () {
//     return view('dashbord/changepasswordbyAdmin');
// });
Route::get('/post', function () {
    return view('dashbord/changepasswordbyAdminPost');
});
Route::get('/guest', function () {
    return view('layout/guestlayout');
});
// Route::get('/showreport',[ExportController::class,'exportExcel']);
// Route::get('/export',[ExportController::class,'exportReport']);
Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/registerpost',[AuthController::class,'registerPost']);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginpost',[AuthController::class,'loginPost']);
Route::get('/authmain',[AuthController::class,'authMain']);
Route::get('/loginerror',[AuthController::class,'loginError'])->name('login.error');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/showuser',[UserController::class,'getalluser']);
Route::get('/changepasswordAdmin',[UserController::class,'getalluser']);

Route::get('/userdash', function () {
    return view('dashbord/userdashbord');
});
// Route::get('/userreport', function () {
//     return view('Report/userreport');
// });
Route::get('/showreport',[ExportController::class,'exportExcel']);
Route::get('/export',[ExportController::class,'exportReport']);

