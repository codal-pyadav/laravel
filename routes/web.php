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
Route::get("pk", function () {
    return view("TestView");
});

Route::get("demo", "DemoController@index");

Route::get("test2", "TestController@showView");

Route::get("test", "TestController@index");

Route::get('/', function () {
    return view('welcome');
});
