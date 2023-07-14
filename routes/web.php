<?php

use App\Http\Controllers\PagesController;
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
//Pages
Route::get('/', function () {
    return view('front.welcome');
});

Route::get('/password-reset', function () {
    return view('auth.email');
});

Route::get('/reset-password/{token}', function () {
    return view('auth.reset');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

//CONTACT
Route::get('/contact-us',[PagesController::class, 'contactIndex'])->name('contact');
Route::middleware(['auth', 'role:admin'])->name('contact.')->prefix('contact')->group(function () { 
    // Route::get('/total-day-income', [DailyIncomeController::class, 'web'])->name('total.day.income');    
     
});

//ABOUT US
Route::get('/about-us',[PagesController::class, 'about'])->name('about');
Route::middleware(['auth', 'role:admin'])->name('about.')->prefix('about')->group(function () { 
    // Route::get('/total-day-income', [DailyIncomeController::class, 'web'])->name('total.day.income');    
     
});

//Tutoring
Route::get('/tutoring',[PagesController::class, 'tutoring'])->name('tutoring');
Route::middleware(['auth', 'role:admin'])->name('tutoring.')->prefix('contact')->group(function () { 
    // Route::get('/total-day-income', [DailyIncomeController::class, 'web'])->name('total.day.income');    
     
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
