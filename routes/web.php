<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/contactUs', [HomeController::class, 'contactUs']);
Route::post('/contactUsPost', [HomeController::class, 'contactUsPost']);
Route::get('/aboutUs', [HomeController::class, 'aboutUs']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/careers', [HomeController::class, 'careers']);
Route::post('/careerFormPost', [HomeController::class, 'careerFormSubmit'])->name('submit.career');
Route::get('/testimonials', [HomeController::class, 'testimonials']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/faqs', [HomeController::class, 'faq']);
Route::get('/getaQuote', [HomeController::class, 'getaQuote']);
Route::post('/getaQuotePost', [HomeController::class, 'getaQuotePost']);
