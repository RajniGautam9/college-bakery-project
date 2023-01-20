
<?php


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
    return view('welcome');
});


Route::get('master', function () {
    return view('layouts.master');
});

Route::get('index', function () {
    return view('index');   
    
});

<<<<<<< HEAD
Route::resource('delivery','DeliveryController');

Route::resource('category','CategoryController');

Route::resource('faq','FaqController');
=======

Route::resource('customer','CustomerController');
Route::resource('stores','StoreController');
Route::resource('notification','NotificationController');
Route::resource('order','OrderController');
Route::resource('company','CompanyController');
Route::resource('brands','BrandController');

>>>>>>> c66d10f53d0a8c64bc6e7ac348b8e5be88ba7b8f
