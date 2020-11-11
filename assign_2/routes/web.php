<?php

use Illuminate\Support\Facades\Route;

Route::post('/cars/create', '\App\Http\Controllers\CarsController@createCars')->name('cars.create');
Route::get('/cars/edit/{id}', '\App\Http\Controllers\CarsController@editCars')->name('cars.edit');
Route::post('/cars/update/', '\App\Http\Controllers\CarsController@updateCars')->name('cars.update');
Route::post('/cars/delete/', '\App\Http\Controllers\CarsController@deleteCars')->name('cars.delete');
Route::get('/cars', '\App\Http\Controllers\CarsController@getCars')->name('cars');
