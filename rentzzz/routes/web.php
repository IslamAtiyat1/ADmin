<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LessonDashboardController;
use App\Http\Controllers\LessonProfileController;
use App\Http\Controllers\LessonHouseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\auth\SignupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\HouseController;
use App\Http\Controllers\admin\LessorController;
use App\Http\Controllers\admin\RentorController;
use App\Http\Controllers\admin\ReservationController;

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

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php



Route::get('/lessons', [LessonDashboardController::class, 'index'])->name('lessons.index');
Route::get('/lessons', [LessonDashboardController::class, 'index'])->name('lessons.index');
Route::resource('/profile', LessonProfileController::class);
Route::resource('/addnew', LessonHouseController::class);
Route::resource('/home', HomeController::class);
Route::post('/addnew', [LessonHouseController::class, 'store'])->name('addnew.store');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('login', [LoginController::class, 'login'])->name('login.check');
Route::resource('signup', SignupController::class);
Route::post('/comments/store/{id}', [CommentController::class, 'store'])->name('comments.store');
Route::get('/showHouses', [HomeController::class, 'showHouses'])->name('showHouses');


Route::get('/dashboard', function () {  return view('dashboard');  })->name('dashboard');
// Route::get('/lessorsadmin', function () {   return view('lessorsadmin');})->name('lessorsadmin');
Route::get('/profileadmin', function () {   return view('profileadmin');})->name('profileadmin');;
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
Route::get('/lessorsadmin', [ LessorController::class, 'index'])->name('lessorsadmin.index');


    Route::resource('admin', HouseController::class);
    Route::resource('lessors', LessorController::class);
    Route::resource('rentors', RentorController::class);
    Route::resource('profileadmin', AdminProfileController::class);

    Route::delete('/admin/{id}', [HouseController::class, 'destroy'])->name('housesadmin.destroy');

    Route::delete('/lessorsadmin/{id}', [LessorController::class, 'destroy'])->name('lessorsadmin.destroy');
    // Add other admin routes as needed







