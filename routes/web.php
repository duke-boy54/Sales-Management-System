<?php

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
    return view('auth.login');
});

Route::get('/add', function () {
    \App\Address::create([
        'user_id' => '1',
        'country' => 'india',
        
    ]);
    \App\Address::create([
        'user_id' => '2',
        'country' => 'tanzania'
    ]);
    \App\Address::create([
        'user_id' => '3',
        'country' => 'kenya'
    ]);
    \App\Address::create([
        'user_id' => '4',
        'country' => 'kenya'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/item', 'ItemController');
Route::resource('/sale', 'SaleController');
// Route::resource('/sale.index', 'SaleController');
// Route::resource('/sale_detail', 'Sale_detailController');
Route::resource('/transaction', 'TransactionController');
Route::resource('/supplier', 'SupplierController');
Route::resource('/purchase', 'PurchaseController');
Route::resource('/report', 'ReportController');
// Route::get('/report', 'ReportsController@salereport')->name('salereport');
// Route::get('/sale', 'SaleController@store');
