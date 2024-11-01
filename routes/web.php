<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoreController;


Route::get('/', [StoreController::class, 'index'])->name('home');
Route::get('/shop', [StoreController::class, 'shop'])->name('shop');
Route::get('/product/{id}', [StoreController::class, 'productDetail'])->name('product.detail');
Route::get('/about', [StoreController::class, 'about'])->name('about');
Route::get('/contact', [StoreController::class, 'contact'])->name('contact');
Route::post('/contact-us', [StoreController::class, 'submitContact'])->name('contact.submit');
Route::get('/cart', [StoreController::class, 'cart'])->name('cart');
Route::post('/checkout', [StoreController::class, 'checkout'])->name('checkout');
Route::get('/shop/men', [ShopController::class, 'men'])->name('shop.men');
Route::get('/shop/women', [ShopController::class, 'women'])->name('shop.women');
Route::get('/shop/kids', [ShopController::class, 'accessories'])->name('shop.accessories');

