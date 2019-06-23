<?php



Route::get('/', function(){ return view('frontend.index'); })->name('home');
Route::get('/home2', function(){ return view('frontend.index2'); })->name('home2');
Route::get('/home3', function(){ return view('frontend.index3'); })->name('home3');
Route::get('/about-us', function(){ return view('frontend.about-us'); })->name('about-us');
Route::get('/blog-grid', function(){ return view('frontend.blog-grid'); })->name('blog-grid');
Route::get('/blog-list', function(){ return view('frontend.blog-list'); })->name('blog-list');
Route::get('/blog-single', function(){ return view('frontend.blog-single'); })->name('blog-single');
Route::get('/checkout', function(){ return view('frontend.checkout'); })->name('checkout');
Route::get('/contact-us', function(){ return view('frontend.contact-us'); })->name('contact-us');
Route::get('/detail', function(){ return view('frontend.detail'); })->name('detail');
Route::get('/grid-product', function(){ return view('frontend.grid-product'); })->name('grid-product');
Route::get('/grid-product-right', function(){ return view('frontend.grid-product-right'); })->name('grid-product-right');
Route::get('/list-product', function(){ return view('frontend.list-product'); })->name('list-product');
Route::get('/list-product-right', function(){ return view('frontend.list-product-right'); })->name('list-product-right');
Route::get('/login', function(){ return view('frontend.login'); })->name('login');
Route::get('/shopping-cart', function(){ return view('frontend.shopping-cart'); })->name('shopping-cart');
