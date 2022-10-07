<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;

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
    return view('home', [
        'photographers' => User::whereRoleIs('photographer')->get()
    ]);
})->name('home');

// Auth route for all
Route::group(['middleware'=>['auth']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('create_book');
  
});
Route::post('/bookings/store', [BookingController::class, 'store'])->middleware(['auth'])->name('storeBooking');
Route::get('/myprofile', function () {
    return view('user.show', [
        'user' => auth()->user()
    ]);
})->middleware(['auth'])->name('myprofile');

require __DIR__.'/auth.php';