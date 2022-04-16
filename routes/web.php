<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MeetingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/register', [RegisterController::class, "index"])->name("register");
Route::post('/register', [RegisterController::class, "store"]);

Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class, "store"]);

Route::get('/logout', [LogoutController::class, "index"])->name("logout");

Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard");

Route::get('/admin', [AdminController::class, "index"])->name("admin");
Route::get('/admin/doctor', [AdminController::class, "doctor"])->name("doctor");
Route::post('/admin/doctor', [AdminController::class, "doctor"]);

Route::post('/admin/adddoctor', [AdminController::class, "adddoctor"])->name("adddoctor");
Route::post('/admin/addposition', [AdminController::class, "addposition"])->name("addposition");
Route::get('/admin/addposition', [AdminController::class, "position"]);


Route::delete('/admin/doctor', [AdminController::class, "delete_doctor"])->name("deletedoctor");
Route::delete('/admin/position', [AdminController::class, "delete_position"])->name("deleteposition");
Route::delete('/admin/meeting', [MeetingController::class, "delete"])->name("deletemeeting");

Route::post('/meeting', [MeetingController::class, "store"])->name("meeting");

Route::get('/', function () {
    return view('welcome');
})->name("home");
