<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Invoice;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add_new', function () {
    return view('add_new');
})->name('add_new');

Route::get('delete/{id}','InvoiceController@destroy');

Route::post('/publish', 'InvoiceController@publish')->name('publish');
/*
Route::get('/admin', function () {
    return view('admin_board');
})->middleware('auth', 'auth.admin');
*/
Route::get('/home', 'HomeController@index')->name('home');
