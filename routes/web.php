<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::get('/products/filter/{category?}', function ($category = null) {
    if ($category) {
        return redirect()->route('products.index', [
            'category' => $category
        ]);
    }

    return redirect()->route('products.index');
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');