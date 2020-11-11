<?php


use App\Http\Controllers\CarRentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RepairWorkController;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    return view('index');
});

// contact us section
Route::get('/contact-us',[ContactController::class, 'contact'])->name('contact');

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');
// contact us section completed

// Repair work section
Route::get('/repair-work',[RepairWorkController::class, 'repair'])->name('repairwork');

Route::post('/repair-work',[RepairWorkController::class,'addWork']);

// Repair work section completed

// Testimonial section
Route::get('/view-testimonial', [TestimonialController::class,'viewTestimonial'])->name('viewtestimonial');

Route::view('/add','addTestimonial');

Route::post('/add',[TestimonialController::class,'addTestimonials']);
// Testimonial section completed



// car rental seciton
Route::get('/car-rental', [CarRentController::class, 'showCar'])->name('carrent');

Route::post('/rent-request', [CarRentController::class, 'sendRequest'])->name('car.request');
// car rental section completed

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
