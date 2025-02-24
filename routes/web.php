<?php  

use Illuminate\Support\Facades\Route;  


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');  
Route::get('/payment/create', 'App\Http\Controllers\PaymentController@create')->name('payment.create');  
Route::post('/payment', 'App\Http\Controllers\PaymentController@store')->name('payment.store');  
Route::get('/payment', 'App\Http\Controllers\PaymentController@index')->name('payment.index');  
Route::get('/payment/{id}', 'App\Http\Controllers\PaymentController@show')->name('payment.show');  
Route::delete('/payment/{id}', 'App\Http\Controllers\PaymentController@destroy')->name('payment.destroy');