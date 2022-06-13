<?php

use App\Http\Controllers\allCustomers;
use App\Http\Controllers\oneCustomer;
use Illuminate\Support\Facades\Route;

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


Route::get('/viewAll', [allCustomers::class, 'index']);
Route::get('/viewCst/{id}', [oneCustomer::class, 'index']);

Route::get('/transfers', [allCustomers::class, 'transfers']);


Route::post('/submit/{id}', [oneCustomer::class, 'submit']);
