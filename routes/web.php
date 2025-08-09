<?php

use App\Http\Controllers\EmplyeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Models\Category;

Route::get('/', function () {
    return view('admin-dashboard');
});

Route::controller(EmplyeeController::class)->group(function () {
    Route::get('/employees', 'index')->name('employees.index');
    Route::get('/employees/create', 'create')->name('employees.create');
    Route::post('/employees', 'store')->name('employees.store');
    // Route::get('/employees/{id}/edit', 'edit')->name('employees.edit');
    // Route::put('/employees/{id}', 'update')->name('employees.update');
    // Route::delete('/employees/{id}', 'destroy')->name('employees.destroy');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/services', 'index')->name('services.index');
    Route::get('/services/create', 'create')->name('services.create');// VIEW CREATE NEW SERVICE FORM
});

Route::controller(BillingController::class)->group(function(){
    Route::get('/billing', 'index')->name('billing.index');
});


Route::controller(CategoryController::class)->group(function(){
    Route::get('/categries', 'index')->name('categories.index');
});