<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('department', function () {
    return view('department');
});
Route::get('pricing', function () {
    return view('pricing');
});
Route::get('consultation', function () {
    return view('consultation');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::post('/consultations', [ConsultationController::class, 'store'])->name('consultations.store');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
