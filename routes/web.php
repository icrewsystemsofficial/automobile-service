<?php


use App\Http\Controllers\CarRentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/contact-us',[ContactController::class, 'contact'])->name('contact');

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');

Route::get('/car-rental', [CarRentController::class, 'showCar'])->name('carrent');

Route::post('/rent-request', [CarRentController::class, 'sendRequest'])->name('car.request');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
