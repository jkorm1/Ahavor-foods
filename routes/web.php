<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;


// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Page
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Newsletter Subscription
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Contact Form Submission
Route::get('/contact', [ContactController::class, 'index'])->name('contact'); // Loads the Contact page
Route::post('/contact', [ContactController::class, 'submit'])->name('contact'); // Handles form submissions

// Products Page
Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Product Review Submission
Route::post('/products/{slug}/review', [ProductController::class, 'storeReview'])->name('product.review');
