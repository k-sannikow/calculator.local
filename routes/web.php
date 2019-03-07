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
Route::any('/', function () {
    dump(Calculator::addition(1, 2));
    dump(Calculator::subtraction(1, 2));
    dump(Calculator::multiplication(1, 2));
    dump(Calculator::division(1, 2));
    dump(Calculator::division(1, 0));
});
