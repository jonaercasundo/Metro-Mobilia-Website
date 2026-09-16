<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/import', 'import')->name('import');

Route::view('/export', 'export')->name('Export');

// Fallback for any leftover route('contact') references —
// redirects to the Import page's Contact section.
Route::get('/contact', function () {
    return redirect(route('import') . '#contact');
})->name('contact');

Route::post('/contact', function () {
    return back()->with(
        'success',
        'Thank you. Your inquiry has been received.'
    );
})->name('contact.store');
Route::get('/products', [ProductController::class, 'catalog'])->name('products.catalog');
Route::get('/products/{code}', [ProductController::class, 'show'])->name('products.show');