<?php

use Illuminate\Support\Facades\Route;
// use app/Middleware/Lang;
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

Route::get('/{lang}/', function () {
    return view('home');
});
Route::get('/{lang}/login', function () {
    return view('login');
});
Route::get('/{lang}/signup', function () {
    return view('signup');
});
Route::get('/{lang}/cart', function () {
    return view('cart');
});
Route::get('/{lang}/success', function () {
    return view('success');
});
Route::get('/{lang}/aboutus', function () {
    return view('aboutus');
});
Route::get('/{lang}/cart-checkout', function () {
    return view('cart-checkout');
});
Route::get('/{lang}/cart-payment', function () {
    return view('cart-payment');
});
Route::get('/{lang}/cart-shipping', function () {
    return view('cart-shipping');
});
Route::get('/{lang}/categories', function () {
    return view('categories');
});
Route::get('/{lang}/contactus', function () {
    return view('contactus');
});
Route::get('/{lang}/faq', function () {
    return view('faq');
});
Route::get('/{lang}/product', function () {
    return view('product');
});
Route::get('/{lang}/profile', function () {
    return view('profile');
});
Route::get('/{lang}/wishlist', function () {
    return view('wishlist');
});
Route::get('/{lang}/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/{lang}/term', function () {
    return view('term');
});


