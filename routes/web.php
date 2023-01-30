
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

Route::resource('delivery','DeliveryController');

Route::resource('category','CategoryController');

Route::resource('faq','FaqController');

Route::resource('customer','CustomerController');

Route::resource('stores','StoreController');

Route::resource('notification','NotificationController');

Route::resource('order','OrderController');

Route::resource('company','CompanyController');

Route::resource('brands','BrandController');



// ------------- Status active or deactive ----------------------- 
// ================== Brands Status Update route =============================
Route::get('brands/onStatus/{id}',[App\Http\Controllers\BrandController::class, 'onStatus']);
Route::get('brands/offStatus/{id}',[App\Http\Controllers\BrandController::class, 'offStatus']);

// ------------- Status active or deactive ----------------------- 
// ================== Category Status Update route =============================
Route::get('category/onStatus/{id}',[App\Http\Controllers\CategoryController::class, 'onStatus']);
Route::get('category/offStatus/{id}',[App\Http\Controllers\CategoryController::class, 'offStatus']);


// ------------- Status active or deactive ----------------------- 
// ================== Customer Status Update route =============================
Route::get('customer/onStatus/{id}',[App\Http\Controllers\CustomerController::class, 'onStatus']);
Route::get('customer/offStatus/{id}',[App\Http\Controllers\CustomerController::class, 'offStatus']);



// ------------- Status active or deactive ----------------------- 
// ================== delivery Status Update route =============================
Route::get('delivery/onStatus/{id}',[App\Http\Controllers\DeliveryController::class, 'onStatus']);
Route::get('delivery/offStatus/{id}',[App\Http\Controllers\DeliveryController::class, 'offStatus']);

// ------------- Status active or deactive ----------------------- 
// ================== notification Status Update route =============================
Route::get('notification/onStatus/{id}',[App\Http\Controllers\NotificationController::class, 'onStatus']);
Route::get('notification/offStatus/{id}',[App\Http\Controllers\NotificationController::class, 'offStatus']);