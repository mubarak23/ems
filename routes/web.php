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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/create_employee', [
    'uses' => 'EmployeesController@store',
    'as'  => 'creat_employee',
    'middlewarw' => 'auth'
]);

Route::post('/create_company', [
    'uses' => 'CompaniesController@store',
    'as'  => 'creat_company',
    'middlewarw' => 'auth'
]);
