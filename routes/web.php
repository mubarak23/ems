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

Route::get('/create_company', [
    'uses' => 'CompaniesController@create',
    'as' => 'company.create',
    'middleware' => 'auth'
]);

Route::post('/company_store', [
    'uses' => 'CompaniesController@store',
    'as' => 'company.store',
    'middleware' => 'auth'
]);

Route::get('/companies', [
    'uses' => 'CompaniesController@index',
    'as' => 'compaines.list',
    'middleware' => 'auth'
]);

Route::get('company/employeer/{id}/', [
    'uses' => 'EmployeesController@index',
    'as' => 'company.employees',
    'middleware' => 'auth'
]);

Route::get('company/{id}', [
    'uses' => 'CompaniesController@edit',
    'as' => 'company.edit',
    'middleware' => 'auth'
]);



Route::post('/create_employee', [
    'uses' => 'EmployeesController@store',
    'as'  => 'creat_employee',
    'middleware' => 'auth'
]);

Route::post('/create_company', [
    'uses' => 'CompaniesController@store',
    'as'  => 'creat_company',
    'middlewarw' => 'auth'
]);
