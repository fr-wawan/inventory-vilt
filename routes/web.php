<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return Inertia::render('Suppliers/ListSupplier',[
    //     "name" => 'tes'
    // ]);
});

Route::resource('suppliers',SupplierController::class);
Route::resource('categories',CategoryController::class);