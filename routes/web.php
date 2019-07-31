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

Route::view('/', 'welcome');
Route::view('contact', 'contact');

Route::get('/customers', function () {
    $customers = [
        'Ronaldo',
        'Messi',
        'Hazard',
    ];

    return view('internals.customers', [
        'customers' => $customers,
    ]);
});

Route::get('/about', function () {

    return view('about');
});

