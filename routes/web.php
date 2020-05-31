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
    return view('Home.home');
});

Route::any('dashboard','Home\DashboardController@index')->name('dashboard');
Route::any('shop','Home\DashboardController@shop')->name('shop');
Route::any('list/view','Home\DashboardController@listView')->name('shop.list');
Route::any('checkout/payment','Home\DashboardController@payment')->name('payment');
