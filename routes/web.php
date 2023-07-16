<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\KeyPerformanceIndicatorController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\UsersController;
use App\Models\ContactUs;
use App\Models\TestimonialsController;
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

Route::get('/', [PagesController::class, 'home'])->name('home.page');

Route::get('/password-reset', function () {
    return view('auth.email');
});

Route::get('/reset-password/{token}', function () {
    return view('auth.reset');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

//CONTACT
Route::get('/contact-us',[PagesController::class, 'contactIndex'])->name('contact');
Route::post('/contact-us',[ContactUsController::class, 'store'])->name('contactus.store');
Route::middleware(['auth', 'role:admin'])->prefix('contacts')->name('contacts.')->group(function () {
    Route::get('/', [ContactUsController::class, 'getContacts'])->name('index');
    Route::get('/item', [ContactUsController::class, 'getContactItem'])->name('item');
});

//ABOUT US
Route::get('/about-us',[PagesController::class, 'about'])->name('about');
Route::middleware(['auth', 'role:admin'])->prefix('about')->name('about.')->group(function () {
    Route::get('/', [AboutUsController::class, 'create'])->name('create');
    Route::post('/store', [AboutUsController::class, 'store'])->name('store');
    Route::get('/{id}', [AboutUsController::class, 'edit'])->name('edit');
    Route::put('/{id}', [AboutUsController::class, 'update'])->name('update');
});

// TUTORING
Route::get('/tutoring',[PagesController::class, 'tutoring'])->name('tutoring');
Route::middleware(['auth', 'role:admin'])->prefix('tutorial')->name('tutoring.')->group(function () {
    Route::get('/', [TutorialController::class, 'create'])->name('create');
    Route::get('/{id}', [TutorialController::class, 'edit'])->name('edit');
    Route::post('/store', [TutorialController::class, 'store'])->name('store');
    Route::put('/{id}', [TutorialController::class, 'update'])->name('update');
});

//CREATING $roleNames
Route::get('/create-role',[UsersController::class, 'createRole'])->name('create.role');
Route::get('/assign-role',[UsersController::class, 'assignRole'])->name('assign.role');


//USER ROUTES
Route::middleware(['auth', 'role:admin'])->prefix('users')->name('users.')->group(function () {
    Route::get('/', [UsersController::class, 'getUsers'])->name('index');
    Route::get('/user/{id}', [UsersController::class, 'deleteUser'])->name('destroy');
});

//HOME PAGE - KEY PERFORMANCE INDICATOR
Route::middleware(['auth', 'role:admin'])->prefix('dashboard-home')->name('dashboard_home.')->group(function () {
    Route::get('/', [KeyPerformanceIndicatorController::class, 'create'])->name('create');
    Route::get('/{id}', [KeyPerformanceIndicatorController::class, 'edit'])->name('edit');
    Route::post('/store', [KeyPerformanceIndicatorController::class, 'store'])->name('store');
    Route::put('/{id}', [KeyPerformanceIndicatorController::class, 'update'])->name('update');
});

//HOME PAGE - TESTMONIALS
Route::middleware(['auth', 'role:admin'])->prefix('dashboard-testmonials')->name('testmonials.')->group(function () {
    Route::get('/', [TestimonialsController::class, 'index'])->name('index');
    Route::get('/create', [TestimonialsController::class, 'create'])->name('create');
    Route::get('/{id}', [TestimonialsController::class, 'edit'])->name('edit');
    Route::post('/store', [TestimonialsController::class, 'store'])->name('store');
    Route::put('/{id}', [TestimonialsController::class, 'updateTestimonial'])->name('update');
    Route::delete('/{id}', [TestimonialsController::class, 'deleteTestimonial'])->name('delete');
});

//HOME PAGE - OUR CATEGORIES
Route::middleware(['auth', 'role:admin'])->prefix('dashboard-categories')->name('categories.')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('index');
    Route::get('/create', [CategoriesController::class, 'create'])->name('create');
    Route::get('/{id}', [CategoriesController::class, 'edit'])->name('edit');
    Route::post('/store', [CategoriesController::class, 'store'])->name('store');
    Route::put('/{id}', [CategoriesController::class, 'updateTestimonial'])->name('update');
    Route::delete('/{id}', [CategoriesController::class, 'deleteTestimonial'])->name('delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
